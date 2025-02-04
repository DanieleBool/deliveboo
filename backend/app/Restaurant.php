<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function dishes(){
        return $this->hasMany('App\Dish');
    }

    protected $guarded = ['slug','user_id'];
}
