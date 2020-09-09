<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    //


    
    public function seances(){
        return $this->hasMany('App\Seance');
    }

    public function facutle(){
        return $this->belongsTo("App\Faculte");
    }

    public function reservations(){
        return $this->hasMany('App\reservation_salle');
    }

    public function equipements(){
        return $this->hasMany('App\Equipement_fixe','id_salle');
    }
}
