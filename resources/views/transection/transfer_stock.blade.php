@extends('admin_section.master_layout')
<x-headers/>
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="header">
        <div class="select_option mt-2 mb-2">
            Select Engine Number:<select class="engine"><option>Select Engine</option> </select>
        </div>
        <div class="sucess-msg"></div>
       
    <div>
   <section class="transfer-stock-content mt-2" style="display:none;">
       <form id="form">
        @csrf
           <div class="card-deck">
               <div class="card card-text">
                   <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="id" class="id" hidden>
                        <label for="Date">Delivery Date</label>
                        <input type="date" class="delivery_date form-control" name="delivery_date" required>
                    </div>
                    <div class="form-group">
                        <label for="FiscalYear">Fiscal Year</label>
                        <input type="text" class="fiscal form-control" name="fiscal" required>
                    </div>
                    <div class="form-group">
                        <label for="DeliverFrom">Deliver From</label>
                        <select class="deliveryFrom form-control" name="deliveryFrom"></select>
                    </div>
                    <div class="form-group">
                        <label for="DeliverTo">Deliver To</label>
                        <select class="deliveryTo form-control" name="deliveryTo"></select>
                    </div>
                   </div>
               </div>

               <div class="card card-text">
                <div class="card-body">
                    <div class="form-group">
                        <label for="Chalan">Chalan Number</label>
                        <input type="text" class="chalan_no form-control" name="chalan_no" required>
                    </div>
                    <div class="form-group">
                        <label for="Engine">Engine Number</label>
                        <input type="text" class="engine form-control" name="engine" required>
                    </div>
                    <div class="form-group">
                        <label for="Model">Model</label>
                        <input type="text" class="model form-control" name="model" required>
                    </div>
                </div>
            </div>

            <div class="card card-text">
                <div class="card-body">
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="color form-control" name="color" required>
                    </div>
                    <div class="form-group">
                        <label for="driver">Driver Name</label>
                        <input type="text" class="driver_name form-control" name="driver_name" required>
                    </div>
                    <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <input type="text" class="driver_contact form-control" name="driver_contact" required>
                    </div>
                </div>
            </div>

           </div>
           <button class="btn btn-success mx-auto d-block mt-2">Transfer</button>
       </form>
   </section>
    

    </div>
    </div>
    @endsection
    <script>
        $('document').ready(function(){
            get_branch_list();
            getEngine();
            $('.engine').on('change',function(e){
                var engine=$(this).val();
                $('.transfer-stock-content').show('slow');
                $.get("{{url('getStockByEngine')}}/"+engine,function(data){
                   
                    var result=JSON.parse(data);
                    $('.id').val(result[0].id); 
                    $('.engine').val(result[0].engine);
                    $('.model').val(result[0].model);
                    $('.fiscal').val(result[0].fiscal);
                    $('.color').val(result[0].color);    
                   
                  
                })
            })
            $('#form').on('submit',function(e){
          e.preventDefault();
          var formdata=new FormData(this);
          formdata.append('passcode',$('.deliveryTo').find('option:selected').data('passcode'));
          $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
          $.ajax({
              url:"{{url('transfer_stock_insert')}}",
              type:"post",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
              
              success:function(data){
                  if(data!=='isStringEmpty')
                    setTimeout(function(){
                    $('.success-msg').append("<h4 class='text-center card-title'>Successfully Transfered</h4>");
                    }5000 )
              }
          })
      })
        })
        function get_branch_list(){
            var html=""
         $.get("{{url('branch_list')}}",function(data){
        var list=JSON.parse(data);
        for(var i=0; i<list.length; ++i){
           html+='<option value="'+list[i].office+'" data-passcode="'+list[i].passcode+'">' +list[i].office+ '</option>'
        }
        $('.deliveryTo,.deliveryFrom').append(html);
    })

        }
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
      
    </script>