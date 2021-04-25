<x-headers/>
<x-navbar/>
<link rel="stylesheet" href="{{asset('css/view_inventory.css')}}">
<script src="{{asset('js/view_sell.js')}}"></script>
<div class="container-fluid">
<div class="jumbotron">
    <h4 class="card-title mt-4 mb-2 text-center">Sales List</h4>
    <div class="sub_menu ">
        <div class="search_bar">
            <div class="input-group">
                <input type="text" name="search_by_cr" placeholder="Engine" class="form-control">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-success" name="search_btn"><i class="fa fa-search"></i></button>
                </div>
        </div>
        </div>
        <div class="search_by_branch input-group">
            <div class="input-group-prepend">
                <span class='input-group-text'>Search</span>
            </div>
            <select name="passcode"class="passcode form-control">
               
            </select>    
            
        </div>
    </div>
    <div class="error-msg"></div>
    <div class="table-responsive mt-2">
        @if(!session()->has('message'))

        <h4 class='card-title text-success text-center'>{{session('success')}}</h4>
         <div class="error_message"></div>
        <table class="table table-striped table-hover table-bordered">     
            <thead>
                <th>name</th>
                <th>Position</th>
                <th>Address.</th>
                <th>contact No.</th>
                <th>Approval</th>
                
            </thead>
            <tbody class="content">
                @foreach($list as $i)
                <tr>
                    <td>{{$i->name}}</td> <td>{{$i->position}}</td><td>{{$i->address}}</td><td>{{$i->contact}}</td> 
                    <td><img src="{{asset('approval_images/'.$i->image_name)}}"></td>
                    <td><a class='btn btn-info' href="{{url('inventory1_edit/'.$i->id)}}"><i class="fa fa-edit"></i></a></td>
                    <td><button class="delete btn btn-danger" data-id="{{$i->id}}"><i class='fa fa-trash'></i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
    
    <div class="page"> {{$list->links()}} </div>
</div>
</div>
@endif


