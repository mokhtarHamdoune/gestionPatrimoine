<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement_fixe extends Model
{
    public function salle(){
        return $this->belongsTo('App\Salle','id_salle');
    }

    public function panne(){
        return $this->hasOne('App\Panne','id_equipement');
    }
}
