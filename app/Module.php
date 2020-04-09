<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{



    public function enseignant(){

        return $this->belongsTo("App\Enseignant");

    }
   
}
