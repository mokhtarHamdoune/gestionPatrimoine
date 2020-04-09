<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function faculte(){

        return $this->belongsTo("App\Faculte");

    }
    // une salle reserver par plusieur reservation
    public function reservation(){
        
        return $this->belongsToMany("App\Reservation");

    }
}
