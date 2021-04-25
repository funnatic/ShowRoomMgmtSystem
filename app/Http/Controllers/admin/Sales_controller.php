<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\sell;
use App\model\costumer;
use App\model\inventory2;
use Session;
use Validator;
use Excel;
use App\Exports\ExportSales;

class Sales_controller extends Controller
{
   function save(Request $req){
   $validator=Validator::make($req->all(),[
        'approval_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
    ]);
        if($req->has('approval_image')){
            if($validator->passes()){

         
       $sales= new sell();
       $sales->date=$req->input('date');
       $sales->passcode=$req->input('passcode');
       $sales->staff_id=$req->input('staff_id');
       $sales->invoice_no=strtoupper($req->input('invoice_no'));
       $sales->registration_no=$req->input('registration');
       $sales->chalan_no=$req->input('chalan_no');
       $sales->value=$req->input('value');
       $sales->discount=$req->input('discount');
       $sales->net_value=$req->input('net_value');
       $engine=strtoupper($req->input('engine'));
       $sales->chasis=strtoupper($req->input('chasis'));
       $sales->model=strtoupper($req->input('model'));
       $sales->inventory1_id=strtoupper($req->input('inventory1_id'));
       $sales->fuel=strtoupper($req->input('fuel'));
       $sales->color=strtoupper($req->input('color'));
       $sales->costumer_name=strtoupper($req->input('costumer_name'));
       $costumer= new costumer();
       $costumer->costumer_name=strtoupper($req->input('costumer_name'));
       $costumer->fname=strtoupper($req->input('fname'));
       $costumer->contact_no=$req->input('contact_no');
       $costumer->email=strtoupper($req->input('email'));
       $costumer->dob=strtoupper($req->input('dob'));
       $costumer->province=strtoupper($req->input('province'));
       $costumer->district=strtoupper($req->input('district'));
       $costumer->gaupalika=strtoupper($req->input('gaupalika'));
       $costumer->ward_no=strtoupper($req->input('ward_no'));
       $costumer->street=strtoupper($req->input('street'));
       $image_name=$req->costumer_name.'.'.$req->approval_image->extension();
       $sales->approval_image=$image_name;
       $req->file('approval_image')->storeAs('public/approval_images',$image_name);

       $count=inventory2::where('engine',$engine)->count();
       
      echo $count;
      if($count>0){

        If($costumer->save()){
            $id=$costumer->id;
            $sales->costumer_id=$id;
            $sales->engine=$engine;
            if($sales->save()){
                inventory2::where('engine',$engine)->delete();
                return Response()->json(['success_msg'=>'successfully saved']);
            }
 
        }
    }else{
          return response()->json(['error_msg'=>'Engine Number is not Available please Check Inventory']);
       }
       
       
   }else{
        return Response()->json(['error'=>$validator->errors()->all()]);
    }

   
    }
}
      
       function search_by_office($passcode){
        $sell=sell::where('passcode',$passcode)->get();
        if(!$sell->isEmpty()){
            echo json_encode($sell);
        }else{
            echo "stringIsEmpty";
        }
    }
    
   
   function view($passcode){
       
    $list=sell::where('passcode',$passcode)->paginate(10);
 
     if(!is_null($list)){
        return view('admin_section/sales/view_sales',compact('list'));

    }
    return view('admin_section/sales/view_sales')->with(Session::flash('message','No Data Available'));

   }
   function search_image($engine){
     $approval_image=sell::where('engine',strtoupper($engine))->value('approval_image');
     if(is_null($approval_image)){
         echo "error_msg";
     }else{
         echo $approval_image;
     }
   }
   function search_by_engine($engine){
       $list=inventory2::where('engine',$engine)->get();
       echo json_encode($list);

   }
   function ExportSales(){
       return Excel::download(new ExportSales,'seles.xlsx');

   }
}
