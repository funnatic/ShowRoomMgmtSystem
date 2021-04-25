
<x-headers/>

<link rel="stylesheet" href="{{asset('css/view_inventory.css')}}">
@extends('admin_section.master_layout')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="table-responsive mt-4">
       
    <h4 class='card-title text-success text-center'>{{session('success')}}</h4>
        <table class="table table-sm table-striped table-hover mr-4 ">
            @if(!session()->has('message'))  
            <thead>
                <th>Chasis</th>
                <th>Engine</th>
                <th>Capacity.</th>
                <th>Fuel</th>
                <th>Color</th>
                <th>Brand</th>
                <th>Model</th>
            </thead>
            <tbody>
                @foreach($record as $i)
                <tr>
                    
                    <td>{{$i->chasis}}</td> <td>{{$i->engine}}</td> <td>{{$i->capacity}}</td> <td>{{$i->fuel}}</td> 
                    <td>{{$i->color}}</td> <td>{{$i->brand}}</td> <td>{{$i->model}}</td><td><a class='btn btn-primary' href="{{url('inventory2_edit/'.$i->id)}}"><i class="fa fa-edit"></i></a></td>
                    <td><button class='delete btn btn-danger' data-id="{{$i->id}}"><i class="fa fa-trash"></i></button>
           
                    </tr>
                @endforeach
                <tr><td colspan="5"><a href="{{url('pdf_inventory/'.$i->inventory1_id)}}" target="_blank" class=' btn btn-warning mx-auto d-block'style="width:80px; border-radius:10px;"><i class="fa fa-print text-white" style="font-size:20px;"></i></a></td>
                    <td colspan="4"><a href="{{url('exportInventory')}}" target="_blank"  class="btn btn-success mx-auto d-block "style="width:80px; border-radius:10px;">Excel</a></td>
                </tr>
            </tbody>
        </table>
        @endif
        <h1 class="text-center text-danger card-title">{{session('message')}}</h1>
    </div> 
    </div>
</div>
@endsection
<script>
   $('document').ready(function(e){
     $('.delete').on('click',function(e){
         if(confirm('Do you want to delete record')){
          let id=($(this).data('id'));
         $.get('../delete_inventory2/'+id,function(e){
             alert('successfully deleted');
             location.reload();
          })
         }else{
             return(0);
         } 
     })
    
   })
</script>