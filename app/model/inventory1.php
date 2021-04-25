<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class inventory1 extends Model
{
    public function inventory(){
        return $this->hasMany('App\model\inventory2','inventory1_id','id');
    }
   
}
