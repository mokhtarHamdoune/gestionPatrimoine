<?php

namespace App\Http\Controllers;

use App\Panne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $panne = Panne::find($request->id);
        return response()->json(['details'=>[
            'enseignant'=>['nom'=>$panne->Declarateur->nom,'prenom'=>$panne->Declarateur->prenom,'departement'=>$panne->Declarateur->departement->nom],
            'equipement'=>['nom'=>$panne->equipement->nom,'reference'=>$panne->equipement->reference],
            'share_date'=>$panne->created_at
        ]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function edit(Panne $panne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panne $panne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        
    }

    public function delete(Request $request){
        $ids =explode(",",$request->query('ids'));
        Panne::destroy($ids);
        return response()->json(["etat"=>true]);
    }
}
