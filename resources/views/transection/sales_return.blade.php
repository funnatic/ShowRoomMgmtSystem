<x-headers/>

@extends('admin_section.master_layout')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Sales Return</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Search</a>
            </li>
            
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane container active" id="home">
                <div class="form-section1">
                    <!-- form1 -->
                <form class='form-inline'id="form1" >
                   <label for="Engine">Engine No:</label>
                   <input type="text" class="engine form-control ml-2 mr-2" name="engine" required>
                   <label for="Invoice">Invoice No:</label> 
                    <input type="text" class="invoice form-control ml-2" name="invoice" required>
                    <button class="btn btn-info ml-2">Go</button>
                </form>
                </div>
                <div class="sales-content1 " style="display:none">
                    <!-- form2-->
                    <form id="form2">
                    <table class="table-responsive mt-4 border">
                        <tbody>
                           
                            <tr> 
                                <td>Date:</td>
                                 <td><input type="date" name="date" class="date form-control"  required></td>
                                 <td>Sold Date:</td>
                                 <td><input type="text" name="sold_date" class="sold_date form-control"  required></td>
                                <td>Invoice:</td>
                                <td><input type="text" name="invoice" class="invoice form-control" required></td>
                                <td>Chasis:</td>
                                <td><input type="text" name="chasis" class="chasis form-control" id="chasis" required></td>                            
                            </tr>
                            
                            <tr>
                                <td>Engine:</td>
                                <td><input type="text" name="engine" class="engine form-control"  required></td>
                                <td>Model:</td>
                                <td><input type="text" name="model" class="model form-control"  required></td>
                                <td>Fuel:</td>
                                <td><input type="text" name="fuel" class="fuel form-control"  required></td>
                                <td>Color:</td>
                                <td><input type="text" name="color" class="color form-control"  required></td>
                            </tr>
                            <tr>
                                 <td>Costumer Name:</td>
                                 <td><input type="text" name="costumer_name" class="costumer_name form-control"  required></td>
                                 <td>Province:</td>
                                 <td><input type="text" name="province" class="province form-control"  required></td>
                                 <td>Mobile:</td>
                                 <td><input type="text" name="contact_no" class="contact_no form-control"  required></td>
                                 
                            </tr>

                        </tbody>
                    </table>
                    <button class="btn btn-info mx-auto d-block mt-2">Submit</button>
                    </form>
                </div>

            </div>
            <div class="tab-pane container fade" id="menu1">
                <div class="form-section2">
                    <!-- form3-->
                    <form class='form-inline' id="form3">
                     
                    </form>
                    </div>
            </div>
            
          </div>
    </div>
</div>
@endsection


<script>
$('document').ready(function(){
    var inventory1_id="";

$('#form1').on('submit',function(e){
    e.preventDefault();
    csrf_token();
 var formdata=new FormData(this);
 $.ajax({
     type:'post',
     url:'sales_return',
     data:formdata,
     cache:false,
     processData:false,
     contentType:false,
     success:function(data){
     if(data!=="isStringEmpty"){
         $('.sales-content1').show('slow');
        var value=JSON.parse(data);
         $('.engine').val(value[0].engine);
         $('.sold_date').val(value[0].date);
         $('.chasis').val(value[0].chasis);
         $('.fuel').val(value[0].fuel);
         $('.color').val(value[0].color);
         $('.model').val(value[0].model);
         $('.invoice').val(value[0].invoice_no);
         $('.costumer_name').val(value[0].costumer_name);
         $('.contact_no').val(value.contact_no);
         $('.province').val(value.province);
         inventory1_id=value[0].inventory1_id;
        
        
     }
     }
 })

})
$('#form2').on('submit',function(e){
    e.preventDefault();
 
   alert(inventory1_id);
})

})
function csrf_token()
{
    $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
}
</script>