<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\staff;

class Staff_Controller extends Controller
{
  function insert(Request $req){
    $req->validate([
      'approval_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
  ]);
      if($req->has('approval_image')){
          $image_name=$req->name.'.'.$req->approval_image->extension();
          $req->file('approval_image')->storeAs('public/approval_images',$image_name);
          $staff=new staff();
          $staff->position=$req->input('position');
          $staff->passcode=$req->input('passcode');
          $staff->name=$req->input('name');
          $staff->address=$req->input('address');
          $staff->contact=$req->input('contact');
          $staff->approval_image=$image_name;
          if(!$staff->save()){
              echo "isStringEmpty";
          }
    
      }
      else{
        $mage_name="nofile.jpg";
      }
    


  }
  function staff_list($passcode){
    $data=staff::where('passcode',$passcode)->get();
    if(!$data->isEmpty()){
      echo json_encode($data);
    }else{
      echo "stringIsEmpty";
    }
  }
  
}
