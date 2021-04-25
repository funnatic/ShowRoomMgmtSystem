<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\inventory1;
use App\model\inventory2;
use App\Exports\ExportInventory;
use Session;
use PDF;
use Excel;
class Inventory extends Controller
{
 
 function inventory1_insert(Request $req){
   
     $inventory1=new inventory1;
     $inventory1->passcode =$req->input('passcode');
     $inventory1->date =$req->input('date');
     $inventory1->reference_no =strtoupper($req->input('reference_no'));
     $inventory1->invoice_no =strtoupper($req->input('invoice_no'));
     $inventory1->importer =strtoupper($req->input('importer'));
     $inventory1->exporter =strtoupper($req->input('exporter'));
     $inventory1->truck_no =$req->input('truck_no');
     $inventory1->costum_office =$req->input('costum_office');
     
    if($inventory1->save()){
        $inventory1_id=$inventory1->id;
       echo $inventory1_id;
    }
        
     
 } 
 function inventory2_insert(Request $req){

   
   $inventory2=new inventory2;
    $inventory2->inventory1_id =$req->input('inventory1_id');
    $inventory2->chasis =strtoupper($req->input('chasis'));
    $inventory2->engine =strtoupper($req->input('engine'));
    $inventory2->capacity =$req->input('capacity');
    $inventory2->color =strtoupper($req->input('color'));
    $inventory2->fuel =strtoupper($req->input('fuel'));
    $inventory2->brand =strtoupper($req->input('brand'));
    $inventory2->model =strtoupper($req->input('model'));
    $inventory2->delivery_date="new";
    $inventory2->consignment_id="new";
    $inventory2->deliveryTo="new";
    $inventory2->deliveryFrom="new";
    $inventory2->passcode=session('data')[0]['passcode'];
    $inventory2->driver_name="new";
    $inventory2->driver_contact="new";
    $inventory2->save();
    
   
      
   
    
} 
function inventory_list($data){
    
    $list=inventory1::where('passcode',$data)->paginate(10);
    if(!$list->isEmpty()){
        return view('admin_section/inventory/inventory_list',compact('list'));

    }
    return view('admin_section/inventory/inventory_list')->with(Session::flash('message','No Data Available'));
  
}
function view_inventory($id){
    $record=inventory2::where('inventory1_id',$id)->get();
    if(!$record->isEmpty()){
        return view('admin_section/inventory/view_inventory',compact('record'));

    }
    return view('admin_section/inventory/view_inventory')->with(Session::flash('message','No Data Available'));
   
}
function inventory1_update(Request $req){
    $inventory1=new inventory1;
    $inventory1=inventory1::find($req->id);
     $inventory1->passcode =$req->input('passcode');
     $inventory1->date =$req->input('date');
     $inventory1->reference_no =strtoupper($req->input('reference_no'));
     $inventory1->invoice_no =strtoupper($req->input('invoice_no'));
     $inventory1->importer =strtoupper($req->input('importer'));
     $inventory1->exporter =strtoupper($req->input('exporter'));
     $inventory1->truck_no =$req->input('truck_no');
     $inventory1->costum_office =$req->input('costum_office');
     if($inventory1->save()){
    return redirect('inventory/'.$req->passcode)->with(Session::flash('success','Successfully Updated'));
     }
    }
     function inventory2_update(Request $req){
        $inventory2=new inventory2;
        $inventory2=inventory2::find($req->id);
        $inventory2->inventory1_id =$req->input('inventory1_id');
        $inventory2->chasis =strtoupper($req->input('chasis'));
        $inventory2->engine =strtoupper($req->input('engine'));
        $inventory2->capacity =$req->input('capacity');
        $inventory2->color =strtoupper($req->input('color'));
        $inventory2->fuel =strtoupper($req->input('fuel'));
        $inventory2->brand =strtoupper($req->input('brand'));
        $inventory2->model =strtoupper($req->input('model'));
        $inventory2->save();
         if($inventory2->save()){
        return redirect('view_inventory/'.$req->id)->with(Session::flash('success','Successfully Updated'));
      }
}
function inventory1_edit($id){
    $data=inventory1::find($id);
    
    return view('admin_section/inventory/inventory1_update',compact('data'));

}
function inventory2_edit($id){
    $data=inventory2::find($id);
   return view('admin_section/inventory/inventory2_update',compact('data'));
    
}
function delete_inventory1($id){
  
  $inventory2= inventory1::find($id)->inventory;
  if(!$inventory2->isEmpty()){
    $inventory2->delete();
  }
 
  inventory1::find($id)->delete();
}
   
function delete_inventory2($id){
    inventory2::find($id)->delete();
}

function pdf_inventory($inventory_id){
   $id=$inventory_id;
   $inventory1=inventory1::find($id);
   $inventory2=inventory1::find($id)->inventory; 
    $pdf=PDF::loadView('admin_section/inventory/pdf_inventory',compact('inventory1','inventory2'))->setOptions(['defaultFont' => 'Times New Roman']);
    return $pdf->stream('abc.pdf');
      /*return $pdf->download('service trade.pdf');*/
    
}
function search_by_office($passcode){
    $inventory1=inventory1::where('passcode',$passcode)->get();
    if(!$inventory1->isEmpty()){
        echo json_encode($inventory1);
    }else{
        echo "stringIsEmpty";
    }
        
}
function search_by_words(){
    $char="2022";
    $data=inventory1::where('invoice_no','LIKE',"%{$char}%")
    ->orWhere('reference_no','LIKE',"%{$char}%")
    ->orWhere('date','LIKE',"%{$char}%")->get();
    return $data;
}
function getEngine(){
    $engine_list=inventory2::all()->pluck('engine');
   echo json_encode($engine_list);

    

}
function getDetailByEngine($engine){
    $engine_list=inventory2::where('engine',$engine)->get();
    return json_encode($engine_list);
}
function InventoryExport(){
 return Excel::download(new ExportInventory,'inventory.xlsx');
}
function transfer_stock_insert(Request $req){
    $inventory2=inventory2::find($req->id);
    $inventory2->delivery_date=$req->input('delivery_date');
    $inventory2->deliveryTo=$req->input('deliveryTo');
    $inventory2->deliveryFrom=$req->input('deliveryFrom');
    $inventory2->passcode=$req->input('passcode');
    $inventory2->driver_name=$req->input('driver_name');
    $inventory2->driver_contact=$req->input('driver_contact');
    $inventory2->consignment_id=mt_rand(1111111111,9999999999);
    $inventory2->save();
    
    

}
}
