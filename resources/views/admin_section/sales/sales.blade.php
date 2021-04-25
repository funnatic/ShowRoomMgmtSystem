<x-headers/>
<script src="{{asset('js/branch_list.js')}}"></script>

@extends('admin_section.master_layout')
@section('content');
<div class="content-wrapper">
  <div class="container-fluid">
      <h1 class="text-center">Sales Section</h1>
      <div class="success_msg mt-2 mb-2"></div>
      <form id='form'>
      <div class="card-deck border border-dark">
        
          <!---card-deck-->
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title text-center">Invoice Detail</h4>
              </div>
              <div class="card-body card-text">
                <div class="form-group">
                    <label for="date">Delivery Date </label>
                        <input type="date" class="date form-control" name="date" value="" id="date" required>
    
                   
                </div>
                <div class="form-group">
                    <label for="Fiscal_Year">Fiscal Year </label>
                        <input type="text" class="fiscal invoice_no form-control" name="fiscal" required>   
                </div>
                <div class="form-group">
                    <label for="Office">Office </label>
                        <select class='passcode form-control' name="passcode">
                          
                        </select>
                </div>
                <div class="form-group">
                    <label for="Invoice_No">Invoice_No </label>
                        <input type="text" class="invoice_no invoice_no form-control" name="invoice_no" required>   
                </div>
                <div class="form-group">
                    <label for="salesman">DSE</label>
                        <select class='staff_list form-control' name="staff_id">
                          <option value="1">headoffice</option>
                            
                        </select>
                </div>
                           
                <div class="form-group">
                    <label for="chalan">Cahalan_No </label>
                        <input type="text" class="chalan_no form-control" name="chalan_no" required>   
                </div>
                

              </div>
          </div>

          <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Vehicle Detail</h4>
            </div>
            <div class="card-body card-text">
                <div class="form-group">
                    <label for="Registration">Registration No </label>
                        <input type="text" class="registration form-control" name="registration" required>   
                </div>
                <input type="text" value="" name="inventory1_id" class="inventory1_id" hidden>
                <div class="form-group">
                    <label for="Engine">Engine_No </label>
                        <select class="engine form-control" name=engine></select> 
                </div>
                
                <div class="form-group">
                    <label for="chasis">Chasis </label>
                        <input type="text" class="chasis form-control" name="chasis" required>   
                </div>
                <div class="form-group">
                    <label for="Model">Model </label>
                        <input type="text" class="model invoice_no form-control" name="model" required>   
                </div>
                <div class="form-group">
                    <label for="fuel">Fuel</label>
                        <input type="text" class="fuel form-control" name="fuel" required>   
                </div>
                <div class="form-group">
                    <label for="Net Color">Color</label>
                        <input type="text" class="color form-control" name="color" required>   
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Price Detail</h4>
            </div>
            <div class="card-body card-text">
               
                <div class="form-group">
                    <label for="Value">Value</label>
                        <input type="text" class="value form-control" name="value" required>   
                </div>
                <div class="form-group">
                    <label for="Discount">Discount </label>
                        <input type="text" class="discount form-control" name="discount" required>   
                </div>
                <div class="form-group">
                    <label for="Net value">Net Value</label>
                        <input type="text" class="net_value form-control" name="net_value" required>   
                </div>
               
               
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Costumer Detail</h4>
            </div>
            <div class="card-body card-text">
                <div class="form-group">
                    <label for="Costumer_Name">Full Name </label>
                        <input type="text" class="costumer_name form-control" name="costumer_name" required>   
                </div>
                <div class="form-group">
                    <label for="Father_Name">Father Name </label>
                        <input type="text" class="fname form-control" name="fname" required>   
                </div>
              
                <div class="form-group">
                    <label for="Contact_NO">Contact Number </label>
                        <input type="text" class="contact_no form-control" name="contact_no" required>   
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                        <input type="email" class="email form-control" name='email'>
                </div>
                <div class="form-group">
                    <label for="DOB">DOB </label>
                        <input type="date" class="dob form-control" name="dob"  required>   
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Address</h4>
            </div>
            <div class="card-body card-text">
                <div class="form-group">
                    <label for="Province">Province</label>
                        <input type="text" class="province form-control" name='province'>
            
                </div>
                <div class="form-group">
                    <label for="District">District</label>
                        <input type="text" class="district form-control" name='district'>
                </div>
                <div class="form-group">
                    <label for="gaupalika">Metro/Municipal/VDC</label>
                        <input type="text" class="gaupalika form-control" name='gaupalika'>
                       
                </div>
                <div class="form-group">
                    <label for="ward_no">Ward Number</label>
                        <input type="text" class="ward_no form-control" name='ward_no'>
                </div>
                <div class="form-group">
                    <label for="Street">Street</label>
                        <input type="text" class="street form-control" name='street'>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-body">
                <div class="form-group" style="margin-top:200px;">
                    <label for="Approval_images">Approval Images </label>
                        <input type="file" class="approval_image form-control-sm" name="approval_image" required>   
                </div>
            </div>
        </div>

    
      </div>
      <button class="btn btn-success mx-auto d-block mt-4">Save</button>
      <button type="button" class="approvalbtn btn btn-primary float-right" data-toggle="modal" data-target="#myModal">
          Approval
        </button>
    </form>
        <!---/card-deck-->
      
    
  </div>
    </div>
    @endsection
    <div class="modal" id="myModal">
        <div class="modal-dialog ">
          <div class="modal-content">
            <h5 class="card-text text-center">Enter The Engine Number</h5>
            <!-- Modal Header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <input type="text" class="search_engine form-control-sm mx-auto d-block">
             
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button  class="search btn btn-success">search</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
    
    
       
    <script>
        /* change session after completion */
       
     
        $('document').ready(function(e){
          
           get_staff_list();
           getEngine();
           setTimeout(function(e){
            search_by_engine();
           },2000);
        
    
           $('#form').on('submit',function(e){
               
                  e.preventDefault();
               
                  $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            })
          
    
                /*Start insert process*/
            let formdata=new FormData(this);
            $.ajax({
                type:"post",
                url:"sales",
                data:formdata,
                cache:false,
                processData:false,
                contentType:false,
                complete:function(response){
                if($.isEmptyObject(response.responseJSON.error)){
                    $('.success_msg').append('<h5 class="alert alert-success">successfully saved</h5>');
                    setTimeout(function(){
                        $('.success_msg').empty();
                        location.reload();
                    },5000);
             
                }else{
                    printErrorMsg(response.responseJSON.error);
                }
                
    
            }
    
                /*end insert process*/
    
            })
           });
           $('.engine').on('change',function(){
            search_by_engine();
        })
           });
    
    
           function printErrorMsg(msg){
            $.each( msg, function( key, value ) {
                    $(".error_msg").find("ul").append('<li class="alert alert-danger">'+value+'</li>');
                });
           }                         
       
        function get_staff_list(){
            var passcode="headoffice123";
            var html="";
            $.get('staff_entry/'+passcode,function(data){
                if(data=="stringIsEmpty"){
                    return 0;
                }else{
                    let list=JSON.parse(data)
                    for(var i=1;i<list.length; ++i){
                        html+='<option value="'+list[i].id+'">' +list[i].name+ '</option>'
                    }
                    $('.staff_list').empty().append(html);
                }
                
            })
        }
        $('.search').on('click',function(){
           var engine=$('.search_engine').val();
           $.get("search_image/"+engine,function(data){
            if(data=="error_msg"){
    
            }else{
                
         url = '{{asset("storage/approval_images")}}/'+data;
         img = '<img src="'+url+'">';
         popup = window.open();
         popup.document.write(img);                        
         
    
            }
           })
        })
        function getEngine(){
            var html="";
            $.get('getengine',function(data){
                var engine_list=JSON.parse(data);
                for(var i=0;i<engine_list.length;++i){
                    html+='<option value="'+engine_list[i]+'">'+engine_list[i]+'</option>'
                }
                $('.engine').append(html);
            })
        }
        function search_by_engine(){
            var engine=$('.engine').val();
            $.get('search_by_engine/'+engine,function(data){
            var list=JSON.parse(data)
            $('.chasis').val(list[0].chasis);
            $('.model').val(list[0].model);
            $('.inventory1_id').val(list[0].inventory1_id);
            $('.fuel').val(list[0].fuel);
            $('.color').val(list[0].color);
                
            })
            
        }
       
    </script>