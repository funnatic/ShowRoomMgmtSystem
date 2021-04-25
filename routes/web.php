<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','admin_section/authentication');
Route::view('finventory','admin_section/inventory/inventory1');
Route::view('sales','admin_section/sales/sales');
Route::view('payment','admin_section/sales/payment');
Route::view('staff','admin_section/staff/staff');
Route::view('staff','admin_section/staff/staff');
Route::view('inventory_list','admin_section/inventory/inventory_list');
Route::view('staff','admin_section/staff/staff');
Route::view('approval','admin_section/sales/approval');
Route::view('admin_detail','admin_section/admin_detail');
Route::view('show_image','admin_section/sales/image');
Route::view('sinventory','admin_section/inventory/inventory2');
Route::view('transfer_stock','transection/transfer_stock');
Route::view('sales_return','transection/sales_return');

Route::post('authentication','admin\Authentication@verify');
Route::post('inventory1','admin\Inventory@inventory1_insert');
Route::post('inventory2','admin\Inventory@inventory2_insert');
Route::post('inventory1_update/{id}','admin\inventory@inventory1_update');
Route::post('inventory2_update/{id}','admin\inventory@inventory2_update');
Route::post('staff_entry','admin\Staff_Controller@insert');
Route::post('sales','admin\Sales_controller@save');
Route::post('admin_info','admin\Authentication@create_admin_detail');
Route::post('transfer_stock_insert','admin\Inventory@transfer_stock_insert');
Route::post('sales_return','admin\transection@sales_return');

Route::get('inventory/{passcode}','admin\Inventory@inventory_list');
Route::get('inventory1_edit/{id}','admin\Inventory@inventory1_edit');
Route::get('inventory2_edit/{id}','admin\Inventory@inventory2_edit');
Route::get('view_inventory/{id}','admin\Inventory@view_inventory');
Route::get('delete_inventory2/{id}','admin\Inventory@delete_inventory2');
Route::get('delete_inventory1/{id}','admin\Inventory@delete_inventory1');
Route::get('pdf_inventory/{id}','admin\Inventory@pdf_inventory');
Route::get('search_by_office/{passcode}','admin\Inventory@search_by_office');
Route::get('staff_entry/{passcode}','admin\Staff_Controller@staff_list');
Route::get('model_list/{passcode}','admin\Inventory@model_list');
Route::get('sales/{passcode}','admin\Sales_controller@view');
Route::get('search_sell_by_office/{passcode}','admin\Sales_controller@search_by_office');
Route::get('branch_list','admin\Authentication@branch_list');
Route::get('search_words','admin\Inventory@search_by_words');
Route::get('search_image/{engine}','admin\Sales_controller@search_image');
Route::get('getengine','admin\inventory@getEngine');
Route::get('search_by_engine/{engine}','admin\Sales_controller@search_by_engine');
Route::get('exportInventory','admin\Inventory@InventoryExport');
Route::get('ExportSales','admin\Sales_controller@ExportSales');
Route::get('getStockByEngine/{engine}','admin\Inventory@getDetailByEngine');


Route::get('dashboard',function(){
  if(!session()->has('data')){
    return redirect('/');
  }
  return view('admin_section/dashboard');
  }

  ); 