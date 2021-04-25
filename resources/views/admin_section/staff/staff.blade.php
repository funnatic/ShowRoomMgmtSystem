
<x-navbar/>
<link rel="stylesheet" href="{{asset('css/sell.css')}}">
<script src="{{asset('js/branch_list.js')}}"></script>
<div class="container-fluid">
<div class="jumbotron">
    <div class="header mt-4">
        <h4 class="card-title text-center ">Staff Detail </h4>
    <div>
   
    
    <form id="form" enctype="multipart/form-data">
   
            <div class="form-group">
                <label for="Office"> Work Place </label>
                    <select class='passcode form-control' name="passcode">
                        
                    </select>
            </div>
            <div class="form-group">
                <label for="salesman">Position</label>
                    <select class='position form-control' name="position">
                        <option value="manager">Manager</option>
                        <option value="salesofficer">Sales officer</option>
                        <option value="other">other</option>
                        
                    </select>
            </div>
            
            <div class="form-group">
                <label for="name">Full Name</label>
                    <input type="text" class="name form-control" name="name" required>   
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                    <input type="text" class="address form-control" name="address" required>   
            </div>
            <div class="form-group">
                <label for="Contact">Contact Number</label>
                    <input type="text" class="contact form-control" name="contact" required>   
            </div>
            <div class="form-group">
                <label for="Contact">Upload</label>
                    <input type="file" class="contact form-control" name="approval_image" required>   
            </div>
            <button class="btn btn-success mx-auto d-block mt-4" >Save</button>
    </form>
    
</div>

    </div>
<script>
    $('document').ready(function(e){
    $('#form').on('submit',function(e){
        e.preventDefault();
        var formdata=new FormData(this);
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
       $.ajax({
           type:'post',
           url:'staff_entry',
           data:formdata,
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
            if(data=="isStringEmpty"){
                alert('something went wrong');
            }else{
                alert('Sucessfully Inserted Record');
                $('input').val('');
            }
           
           }
       })
           
    })
     
    })
</script>
<style>
    form{
        margin:2% 30%;
    }
</style>