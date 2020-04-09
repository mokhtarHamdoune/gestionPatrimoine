<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function etudiants(){
        
        return $this->hasMany("App\Etudiant");
    }
}
