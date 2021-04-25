<x-headers/>
<form class="mx-auto d-block" id="form">
    <h4 class="card-title text-center"> Admin Detail</h4>
    <div class="form-group">
        <label for="username">Username</label>
     <input type="text" name="username" class="username  form-control-sm" name="username" required>
    </div>
    <div class="form-group">
    <label for="offce">Office</label>
    <input type="text" name="username" class="office  form-control-sm" name="office" required>
   </div>
   <div class="form-group">
   <label for="passcode">Passcode</label>
   <input type="password" name="passcode" class="passcode  form-control-sm" name="passcode" required>
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" name="password" class="password form-control-sm" name="password" required>
 </div>
<button class="submit btn btn-success mx-auto d-block">Submit</button>
</form>
<style>
    #form{
        position: relative;
        left:100px;
        top:100px;
        background:blanchedalmond;
        width:500px;
        height:auto;
        border-radius:10px;
      

    }
    .form-group{
        position:relative;;
       left:45px;
       top:10px;
        
    }
    label{
        width:100px;
    }
</style>
<script>
    $('#form').on('submit',function(e){
        e.preventDefault();
        var formdata=new FormData();
        formdata.append('username',$('.username').val());
        formdata.append('office',$('.office').val());
        formdata.append('passcode',$('.passcode').val());
        formdata.append('password',$('.password').val());
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            type:'post',
            url:'admin_info',
            data:formdata,
            cache:false,
            processData:false,
            contentType:false,
            success:function(data){
                if(data=='isStringEmpty'){
                    alert('something went wrong');
                    
                }else{
                    alert('successfully saved');
                 $('input').val('');
                }
            }
        })
    })

    
</script>