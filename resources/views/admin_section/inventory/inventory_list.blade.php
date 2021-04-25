<x-headers/>
@extends('admin_section.master_layout')

<link rel="stylesheet" href="{{asset('css/view_inventory.css')}}">
<script src="{{asset('js/inventory_list.js')}}"></script>
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <h4 class="card-title mt-2 mb-2 text-center">Inventory List</h4>
    
    <div class="sub_menu">
        <div class="search_bar">
            <div class="input-group">
                <input type="text" name="search_by_any" placeholder="Custom reference" class="form-control">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-success" name="search_btn"><i class="fa fa-search"></i></button>
                </div>
        </div>
        </div>
        <div class="search_by_branch ">
            <div class="input-group">
            <div class="input-group-prepend">
                <span class='input-group-text'>Search</span>
            </div>
            <select name="passcode"class="passcode">
                
            </select>    
        </div>
        </div>
    </div>
    <div class="error-msg"></div>
    <div class="table-responsive">
        @if(!session()->has('message'))

        <h4 class='card-title text-success text-center'>{{session('success')}}</h4>
       
        <table class="table table-sm table-striped table-hover mr-4">
              
            <thead>
                <th>date</th>
                <th>Costum Ref</th>
                <th>Invoice No.</th>
                <th>Vehicle No.</th>
                <th>Custom Office</th>
            </thead>
            <tbody class="tableContent">
                @foreach($list as $i)
                <tr>
                    <td>{{$i->date}}</td> <td>{{$i->reference_no}}</td> <td>{{$i->invoice_no}}</td> 
                     <td>{{$i->truck_no}}</td> <td>{{$i->costum_office}}</td><td><a class='btn btn-primary' href="{{url('inventory1_edit/'.$i->id)}}"><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-success" href="{{url('view_inventory/'.$i->id)}}"><i class='fa fa-eye'></i></a></td>
                    <td><button class='delete btn btn-danger'data-id="{{$i->id}}"><i class="fa fa-trash"></i></button>
           
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="page"> {{$list->links()}} </div>

@endif
    </div>
</div>
@endsection
