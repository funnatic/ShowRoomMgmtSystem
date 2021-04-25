<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class sell extends Model
{
   function costumer(){
       return $this->belongsTo('App\model\costumer','purchase_id','id');
   }
}
