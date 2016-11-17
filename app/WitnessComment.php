<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WitnessComment extends Model
{
    public function witness(){
        $this->belongsTo('App\Witness');
    }
}
