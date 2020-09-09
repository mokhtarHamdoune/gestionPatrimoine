<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model{



    public function Declaration(){
        return $this->hasMany('App\Panne','id_prof');
    }

    public function departement(){
        return $this->belongsTo('App\Departement','id_departement');
    }
}
