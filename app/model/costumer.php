<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    function sell(){
        return $this->hasOne('App\model\sell','costumer_id','id');
    }
}