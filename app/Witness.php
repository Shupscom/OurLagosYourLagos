<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    public function witnessComment(){
        $this->hasMany('App\WitnessComment');
    }
}
