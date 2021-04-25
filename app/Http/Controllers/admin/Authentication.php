<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\authenticate;
use Session;
class Authentication extends Controller
{
    function verify(Request $req){
     $result= authenticate::where('passcode',$req->input('passcode'))
      ->where('password',sha1($req->input('password')))->
      where('username',$req->input('username'))->get(); 
      if($result->count()>0){
       session::put('data',$result);
        return redirect('dashboard');

      } else{
        return redirect('admin')->with(Session::flash('message','Wrong Credentials!'));
      }
     
    }
    function create_admin_detail(Request $req){
      $data=new authenticate();
      $data->username=$req->input('username');
      $data->office=$req->input('office');
      $data->passcode=$req->input('passcode');
      $data->password=sha1($req->input('password'));
      if(!$data->save()){
        echo "stringIsEmpty";
      }
    }

  function branch_list(){
    $data=authenticate::all();
    echo json_encode($data);
  }
}
