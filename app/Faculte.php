<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    public function salles(){
        return $this->hasMany("App\Salle");
    }
}
