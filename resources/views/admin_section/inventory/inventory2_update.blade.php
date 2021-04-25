
@extends('admin_section.master_layout')
<x-headers/>
@section('content')

    <div class="header mt-4">
        <h4 class="card-title text-center ">INVENTORY FORM 2 </h4>
    <div>

    <form id="form" action="{{url('../inventory2_update/'.$data->id)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="id">Inventory_ID</label>
            <input type="text" name="inventory1_id" value="{{$data->inventory1_id}}" class="form-control" id="chasis" required>
            </div>
    <div class="form-group">
    <label for="Chasis">Chasis</label>
    <input type="text" name="chasis" value="{{$data->chasis}}" class="form-control" id="chasis" required>
    </div>
    <div class="form-group">
        <label for="Engine:">Engine</label>
        <input type="text" name="engine" value="{{$data->engine}}" class="form-control" id="engine" required>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="Capicity">Capacity</label>
            <input type="text" name="capacity" value="{{$data->capacity}}" class="form-control" id="capacity" required>
            </div>

            <div class="form-group">
                <label for="Fuel">Fuel</label>
                <input type="text" name="fuel" value="{{$data->fuel}}" class="form-control" id="fuel" required>
                </div>

                <div class="form-group">
                    <label for="Color">Color</label>
                    <input type="text" name="color" value="{{$data->color}}" class="form-control" id="color" required>
                    </div>

    </div>   
                <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="Brand">Brand</label>
                    <input type="text" name="brand" value="{{$data->brand}}" class="form-control" id="brand" required>
                    </div>

                    
                <div class="form-group">
                    <label for="Model">Model</label>
                    <input type="text" name="model" value="{{$data->model}}" class="form-control" id="model" required>
                    </div>
                </div>

        </div>
                        <button class="btn btn-success mx-auto d-block">Update</button>
    </form>
   
@endsection