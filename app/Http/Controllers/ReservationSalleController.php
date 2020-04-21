<?php

namespace App\Http\Controllers;

use App\Reservation_salle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationSalleController extends Controller
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
        $reserver = new Reservation_salle();
        $reserver->titre=$request->titre;
        $reserver->id_prof=$request->prof;
        $reserver->promo_id=$request->promo;
        $reserver->id_salle=$request->salle_id;
        $reserver->date=$request->date_res;
        $reserver->heure_debut=$request->heure_deb;
        $reserver->heure_fin=$request->heure_fin;
        $reserver->save();
        return redirect('/sg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation_salle  $reservation_salle
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation_salle $reservation_salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation_salle  $reservation_salle
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation_salle $reservation_salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation_salle  $reservation_salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation_salle $reservation_salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation_salle  $reservation_salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation_salle $reservation_salle)
    {
        //
    }
}
