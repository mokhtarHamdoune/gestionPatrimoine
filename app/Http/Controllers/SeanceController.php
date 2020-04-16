<?php

namespace App\Http\Controllers;

use App\Seance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Promo;
use App\Module;
use App\Salle;
use App\Prof;
use DB;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        //
    }



    public function get_ajout_promo(Request $request)
    {
        $id_depart = $request->id_depart;
        $promos= Promo::where('id_departement','=', $id_depart )->get(); 
        
        return view('SG.ajoutpromoSG' , ['promos'=>$promos ]);    

    }



public function get_promo(Request $request)
{
    $id_depart = $request->id_depart;
    $promos= Promo::where('id_departement','=', $id_depart )->get(); 
 
    return view('SG.selectpromoSG' , ['promos'=>$promos ]);    

}

public function ajaxnewpromo(Request $request)
{
    $id_depart = $request->id_depart;
    $nom_promo = $request->nom_promo;

    $data = new Promo;
    $data->id_departement = $id_depart;
    $data->nom = $nom_promo;
  
    if ($data->save()) {

        $last_insert_id = $data->id ;
    
        $data2 = [
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '08h30' , 'heure_fin'=> '10h00' , 'jour'=> 'DIMANCHE'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '10h00' , 'heure_fin'=> '11h30' , 'jour'=> 'DIMANCHE'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '11h30' , 'heure_fin'=> '13h00' , 'jour'=> 'DIMANCHE'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '13h30' , 'heure_fin'=> '15h00' , 'jour'=> 'DIMANCHE'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '15h00' , 'heure_fin'=> '16h30' , 'jour'=> 'DIMANCHE'],
            //...
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '08h30' , 'heure_fin'=> '10h00' , 'jour'=> 'LUNDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '10h00' , 'heure_fin'=> '11h30' , 'jour'=> 'LUNDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '11h30' , 'heure_fin'=> '13h00' , 'jour'=> 'LUNDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '13h30' , 'heure_fin'=> '15h00' , 'jour'=> 'LUNDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '15h00' , 'heure_fin'=> '16h30' , 'jour'=> 'LUNDI'],
            //...
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '08h30' , 'heure_fin'=> '10h00' , 'jour'=> 'MARDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '10h00' , 'heure_fin'=> '11h30' , 'jour'=> 'MARDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '11h30' , 'heure_fin'=> '13h00' , 'jour'=> 'MARDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '13h30' , 'heure_fin'=> '15h00' , 'jour'=> 'MARDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '15h00' , 'heure_fin'=> '16h30' , 'jour'=> 'MARDI'],
            //...
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '08h30' , 'heure_fin'=> '10h00' , 'jour'=> 'MERCREDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '10h00' , 'heure_fin'=> '11h30' , 'jour'=> 'MERCREDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '11h30' , 'heure_fin'=> '13h00' , 'jour'=> 'MERCREDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '13h30' , 'heure_fin'=> '15h00' , 'jour'=> 'MERCREDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '15h00' , 'heure_fin'=> '16h30' , 'jour'=> 'MERCREDI'],
            //...
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '08h30' , 'heure_fin'=> '10h00' , 'jour'=> 'JEUDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '10h00' , 'heure_fin'=> '11h30' , 'jour'=> 'JEUDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '11h30' , 'heure_fin'=> '13h00' , 'jour'=> 'JEUDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '13h30' , 'heure_fin'=> '15h00' , 'jour'=> 'JEUDI'],
            ['id_promo'=>$last_insert_id, 'heure_debut'=> '15h00' , 'heure_fin'=> '16h30' , 'jour'=> 'JEUDI'],
            //...
 ];
    
       // Model::insert($data); // Eloquent approach
        DB::table('seances')->insert($data2); // Query Builder approach
        if ($data->save()) {
            return response()->json(['success'=>'Got Simple Ajax Request.']);         
        }

       }
}


public function ajaxAddmodule(Request $request) {
    $nom_module = $request->nom_module;
    $id_promo = $request->id_promo;
    
    DB::table('modules')->insert([
        ['nom' => $nom_module , 'id_promo' => $id_promo]
    ]);
  return response()->json(['success'=>'Got Simple Ajax Request.']);    
}


public function ajaxdeleteseance(Request $request) {
    $id_seance = $request->id_seance;

  //  DB::table('')->where('votes', '>', 100)->delete();

  $affected = DB::table('seances')
              ->where('id', $id_seance)
              ->update(['id_prof' => null , 'id_module' => null , 'id_salle' => null ]);
    return response()->json(['success'=>'Got Simple Ajax Request.']);    
}


public function ajaxaddseance(Request $request) {
  
    $id_module = $request->id_module;
    $id_prof =  $request->id_prof;
    $id_salle =  $request->id_salle;
    $type_seance =  $request->type_seance;
    $id_seance  =   $request->id_seance;
    $affected = DB::table('seances')
    ->where('id', $id_seance)
    ->update(['id_prof' => $id_prof , 'id_module' => $id_module , 'id_salle' => $id_salle  , 'type' => $type_seance ]);
    
    return response()->json(['success'=>'Got Simple Ajax Request.']);    
}

public function ajaxupdatesalle(Request $request)
{
    $data = '';
    $id_seance = $request->id_seance;
 
    $seances = DB::table('seances')->where('id', $id_seance)->get();

  
foreach ($seances as $o) {
    $jour = $o->jour;
    $heure_debut = $o->heure_debut;
}
//return $jour ;
    
$salles = DB::select('SELECT * FROM salles WHERE id NOT IN
 (SELECT id_salle FROM seances WHERE  id_salle IS NOT NULL AND heure_debut LIKE "'.$heure_debut.'" AND jour LIKE "'.$jour.'"  )');

$data .='document.getElementById("salle").options.length=0;';
foreach($salles as $s):
   $data .="$('#salle').append(new Option('".$s->nom."', '".$s->id."', true, true))  ;";
endforeach;
$data .='';

echo $data;    
}










public function get_emploi(Request $request)
{
    $id_depart =    $request->id_depart;
    $id_promo =     $request->id_promo;
    $profs   =  Prof::where('id_departement','=', $id_depart )->get(); 
    $nom_promo = Promo::where('id','=', $id_promo )->get(); 
    $modules= Module::where('id_promo','=', $id_promo )->get(); 
    
   


    $seances = DB::table('seances')
    ->leftjoin('modules', 'seances.id_module', '=', 'modules.id')
    ->leftjoin('profs', 'seances.id_prof', '=', 'profs.id')
    ->leftjoin('salles', 'seances.id_salle', '=', 'salles.id')   
    ->select('seances.*', 'modules.nom as nom_module' , 'profs.nom as nom_prof','salles.nom as nom_salle' )
    ->where('seances.id_promo','=', $id_promo )
    ->orderByRaw('seances.id')
    ->get();


    return view('SG.empoidutempsSG' , ['modules'=>$modules , 'profs'=>$profs  , 'seances'=>$seances  , 'nom_promo'=>$nom_promo  ]);    



}










}
