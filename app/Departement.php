<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    //

    public function profs(){
        return $this->hasMany('App\Prof','id_departement');
    }

    public function promos(){
        return $this->hasMany('App\Promo','id_departement');
    }
}
