<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function blogger(){
        return $this->belongsTo('App\Blogger','blogger_id');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
