<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //un enseignant eseigne plusieur module
    public function modules(){

        return $this->hasMany('App\Module');
        
    }
}
