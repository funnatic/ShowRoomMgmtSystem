<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\costumer;
use App\model\sell;

class Transection extends Controller
{
    function sales_return(Request $req){
       $sell=sell::where('engine',strtoupper($req->input('engine')))->where('invoice_no',strtoupper($req->input('invoice')))->get();
       if(!is_null($sell)){
          $id=$sell[0]->costumer_id;
         $costumer=costumer::find($id)->get();
         $sell['contact_no']=$costumer[0]->contact_no;
         $sell['province']=$costumer[0]->province;
          return json_encode($sell);

       }else{
           echo "isStringEmpty";
       }
       
    }
}
