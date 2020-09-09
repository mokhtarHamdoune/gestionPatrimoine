<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    
    public function declarateur(){
        return $this->belongsTo('App\Prof','id_prof');
    }

    public function equipement(){
        return $this->belongsTo('App\Equipement_fixe','id_equipement');
    }
}
