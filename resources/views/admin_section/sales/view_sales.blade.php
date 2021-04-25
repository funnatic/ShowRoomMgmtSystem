<x-headers/>
@extends('admin_section.master_layout')
<link rel="stylesheet" href="{{asset('css/view_inventory.css')}}">
<script src="{{asset('js/view_sell.js')}}"></script>
@section('content')
   <div class="content-wrapper">
    <div class="container-fluid">
    <div class="sub_menu ">
        <div class="search_bar">
            <div class="input-group">
                <input type="text" name="search_by_cr" placeholder="Engine" class="form-control">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-success" name="search_btn"><i class="fa fa-search"></i></button>
                </div>
        </div>
        </div>
        <div class="search_by_branch">
            <div class="input-group">
            <div class="input-group-prepend">
                <span class='input-group-text'>Search</span>
            </div>
            <select name="passcode"class="passcode form-control">
               
            </select>    
            </div>
        </div>
    </div>
    <div class="error-msg"></div>
    <div class="table-responsive mt-2">
        @if(!session()->has('message'))

        <h4 class='card-title text-success text-center'>{{session('success')}}</h4>
         <div class="error_message"></div>
        <table class="table table-striped table-hover table-bordered">     
            <thead>
                <th>Date</th>
                <th>Invoice No.</th>
                <th>Registration No.</th>
                <th>Chalan No.</th>
                <th>Engine</th>
                <th>Model</th>
                <th>Value</th>
                <th>Discount</th>
                <th>Net Value</th>
                
            </thead>
            <tbody class="sales_view_content">
                @foreach($list as $i)
                <tr>
                    <td>{{$i->date}}</td> <td>{{$i->invoice_no}}</td><td>{{$i->registration_no}}</td><td>{{$i->chalan_no}}</td> 
                    <td>{{$i->engine}}</td> <td>{{$i->model}}</td> 
                    <td>{{$i->value}}</td><td>{{$i->discount}}</td><td>{{$i->net_value}}</td>
                    <td><a class='btn btn-info' href="{{url('inventory1_edit/'.$i->id)}}"><i class="fa fa-edit"></i></a></td>
                    <td><button class="delete btn btn-danger" data-id="{{$i->id}}"><i class='fa fa-trash'></i></button></td>
                    <td><a class="btn btn-success" href="{{url('view_inventory/'.$i->id)}}"><i class='fa fa-print'></i></a></td>
                   
           
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
    
    <div class="page"> {{$list->links()}} </div>
    </div>
   </div>
@endsection
@endif


