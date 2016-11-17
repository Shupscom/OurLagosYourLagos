<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
class Blogger extends Model  implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    public function post(){
        return $this->hasMany('App\Post');
    }
}
