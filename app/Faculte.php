<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{

    public function departements(){
        $this->hasMany('App\Departement');
    }
    
    public function salles(){
        return $this->hasMany('App\Salle',"id_faculte");
    }
}
