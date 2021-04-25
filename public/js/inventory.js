$('document').ready(function(e){
   
 
    $('#form').on('submit',function(e){
        e.preventDefault();
        let formdata=new FormData();
        formdata.append('inventory1_id',$('#inventory1_id').val());
        formdata.append('chasis',$('#chasis').val());
        formdata.append('engine',$('#engine').val());
        formdata.append('capacity',$('#capacity').val());
        formdata.append('fuel',$('#fuel').val());
        formdata.append('color',$('#color').val());
        formdata.append('brand',$('#brand').val());
        formdata.append('model',$('#model').val());
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'post',
            url:'inventory2',
            data:formdata,
            cache:false,
            processData:false,
            contentType:false,
            success:function(msg){
            if(!confirm('Do you want insert more record!')){
                window.location.href="finventory";
            }
        
            $('#engine').val('');
            $('#engine').val('');
            $('#capacity').val('');
            $('#fuel').val('');
            $('#color').val('');
            $('#brand').val('');
            $('#model').val('');

            }
        })
       
    
    });
    });