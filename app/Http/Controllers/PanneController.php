<?php

namespace App\Http\Controllers;

use App\Panne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Salle;
use App\Departement;
class PanneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pannes=Panne::all();

        return view('SG.notifications.notification',['pannes'=>$pannes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($departement_id)
    {
        $faculte=Departement::find($departement_id)->faculte;
        $salles=$faculte->salles;
        return view('Enseignant.declarer',['salles'=>$salles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipement_id=Salle::find($request->salle)->equipements
        ->where("nom",$request->type_equipe)->first()->id;
        $panne = new Panne();
        $panne->id_prof=$request->id_prof;
        $panne->id_equipement=$equipement_id;
        $panne->commentaire=$request->commentaire;
        $panne->save();
        return redirect("/enseignant");
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $panne = Panne::find($request->id);
        return response()->json(['details'=>[
            'enseignant'=>['nom'=>$panne->Declarateur->nom,'prenom'=>$panne->Declarateur->prenom,'departement'=>$panne->Declarateur->departement->nom],
            'equipement'=>['nom'=>$panne->equipement->nom,'reference'=>$panne->equipement->reference],
            'commentaire'=>$panne->commentaire,
            'share_date'=>$panne->created_at
        ]]);
    }

    //delete one or multiple notification
    public function delete(Request $request){
        $ids =explode(",",$request->query('ids'));
        Panne::destroy($ids);
        return response()->json(["etat"=>true]);
    }
}
