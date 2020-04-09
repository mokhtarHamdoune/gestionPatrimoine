<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    public function equipement(){
        return $this->belongsTo("App\Equipement");
    }
}
