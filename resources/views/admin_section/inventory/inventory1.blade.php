<x-headers/>
@extends('admin_section.master_layout')

    <script src="{{asset('js/branch_list.js')}}"></script>
    @section('content')
    
    <div class="content-wrapper">
      <div class="container-fluid">
        <form id="form1">
        <div class="card-deck">
         
          <!------card deck------>
          <div class="card">
          <div class="card-header">
            <p class="card-title text-center"></p>

          </div>
          <div class="card-body card-text">
            <div class="form-group">
              <label for="Date">Date</label>
              <input type="date" name="date" class="form-control" required>
              </div>
      <div class="form-group">
      <label for="reference_no">Reference_No</label>
      <input type="text" name="reference_no" class="form-control" required>
      </div>
      <div class="form-group">
          <label for="Invoice_No:">Invoice_No</label>
          <input type="text" name="invoice_no" class="form-control" required>
          </div>
          </div>
          </div>

          <div class="card">
            <div class="card-header">
              <p class="card-title text-center"></p>
  
            </div>
            <div class="card-body card-text">
              <div class="form-group">
                <label for="Exporter">Exporter</label>
                <input type="text" name="exporter" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="Importer">Importer</label>
                    <input type="text" name="importer" class="form-control" required>
                    </div>
    
                    <div class="form-group">
                        <label for="Truck_NO">Truck_NO</label>
                        <input type="text" name="truck_no" class="form-control" required>
                        </div>

            </div>
            </div>
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"></p>
    
              </div>
              <div class="card-body card-text">
                <div class="form-group">
                  <label for="Custom_Office">Custom_Office</label>
                  <select name="costum_office" class="form-control">
                      <option value="Rani Bhansar">Rani Bhansar</option>
                      <option value="Birgunj Bhansar">Birgunj Bhansar</option>
                  </select>
                  </div>
                  <div class="form-group">
                      <label for="Custom_Office">Office</label>
                      <select name="passcode" class="passcode form-control">
                         
                      </select>
                      </div>
              </div>
            </div>
            
        </div>
        <button  class="btn btn-primary" style=" margin-left:40%; margin-top:10px;">
          Save
          </button>
          <button type="button" class="btn" data-toggle="modal" data-target="#myModal" id="modalbtn" style=" margin-left:20%; margin-top:10px;">
          
          </button>

     <!------/card deck------>
    </form>
      </div>
    </div>
   
        
      
@endsection
<div class="modal fade" id="myModal" style="width:100%; max-width:100%; position: absolute;top:0;left:0;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Vehicle Record</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        @include('admin_section.inventory.inventory2')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 {{-- second form end--}}


<script>
    $('document').ready(function(e){
     $('#form1').on('submit',function(e){
        e.preventDefault();
        var formdata=new FormData(this);
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            type:'post',
            url:'inventory1',
            data:formdata,
            cache:false,
            processData:false,
            contentType:false,
            success:function(data){
               if(data !==null){
                $('input').val('');
                $('#inventory1_id').val(data);
                $('#modalbtn').trigger('click');

               }
                
            }
        })
    
   })
 
    })
  
</script>