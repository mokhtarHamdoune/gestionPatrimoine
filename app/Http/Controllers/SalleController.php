<?php

namespace App\Http\Controllers;

use App\Salle;
use App\Faculte; 
use App\Seance;
use App\Reservation_salle;
use App\Departement;
use App\Equipement_fixe as Equipement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id_depart)
    {
        
        //returner tous les heur [8h30,10h00,11h30..] 
        $hours=$heursDeb=$this->returnHours($request->start_time,$request->end_time);
        array_pop($heursDeb);
        $returnedSalles='';
        // pour rendre l affichge des date en francais
        setlocale(LC_TIME, 'fr_FR.utf8','fra');
        //les salles de la faculte
        $returnedSalles = Faculte::where('nom',$request->faculte)->first()->salles;
        //trv les salles aves les seances
        $sallesWithSeance = Seance::where('jour','=', strtoupper(strftime("%A",strtotime($request->date_res))))
        //j ai compare avec juste les heurs_debut psq plus facile 
        ->whereIn('heure_debut',$heursDeb)
        //si il demande de 8h30 a 11 h30
        //el la salle est reserve pr 8h30 a 10h00
        //so matakhdemlich for 3h so I'll remove it later 
        ->whereNotNull("id_salle")
        ->select('id_salle')
        // pr eviter la redondance
        ->groupBy('id_salle')
        ->get();
        //salles reservés pour date et time
        // $reservedSalle= Reservation_salle::where([['date','=', $request->date_res],['heure_debut','=',$hours[0]],['heure_fin','=',end($hours)]])
        $reservedSalle= Reservation_salle::where('date','=', $request->date_res)
        ->whereIn('heure_debut',$heursDeb)
        ->get();
        // remove les salles avec seance
        $returnedSalles=$returnedSalles->whereNotIn("id",$sallesWithSeance->pluck("id_salle"));
        //remove les salles avec reservation
        $returnedSalles=$returnedSalles->whereNotIn("id",$reservedSalle->pluck("id_salle"));
        //trv les salles avec le type demande
        $returnedSalles=$returnedSalles->where('type_salle','=', $request->type);
        //trv les salle qui ont les equipement demande (!=Auncun)
        if(!is_null($request->equipement)){
            $equiements = Equipement::whereIN('nom',$request->equipement)
            ->select("id_salle",DB::raw('count(id_salle) as sum_equipm'))
            ->groupBy('id_salle')
            ->having('sum_equipm','>=',count($request->equipement))
            ->get();
            $returnedSalles=$returnedSalles->whereIn("id",$equiements->pluck("id_salle"));
        }
        //retourner les salle filtrer
        return view('SG.salles.search_result',["salles"=>$returnedSalles,"departement"=>Departement::find($id_depart),"date"=>$request->date_res,"heure_deb"=>$hours[0],"heure_fin"=>end($hours)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_depart)
    {
        return view('SG.salles.search',['id_depart'=>$id_depart]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(Salle $salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(Salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {
        //
    }

    private function returnHours($indxHrDeb,$indxHrFin){
        $seancesHours = array('08h30','10h00','11h30','13h00','13h30','15h00','16h30');
        $returnHours= array();
        for ($i=$indxHrDeb;$i<=$indxHrFin;$i++)array_push($returnHours,$seancesHours[$i]);
        return $returnHours;
    }
}
