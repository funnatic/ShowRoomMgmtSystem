function delete1(id){
  if(confirm('Do you want to delete')){
    $.get('../delete_inventory1/'+id,function(data){
      alert('Successfully Deleted');
      location.reload();

    })
  }
  
  }
  
  $('document').ready(function(e){
    var html=""
    $.get('../branch_list',function(data){
        var list=JSON.parse(data);
        for(var i=0; i<list.length; ++i){
           html+='<option value="'+list[i].passcode+'">' +list[i].office+ '</option>'
        }
        $('.passcode').append(html);
    })

    
    $('.delete').on('click',function(e){
      let id=($(this).data('id'));
       delete1(id)
      
    })

    $('.passcode').on('change',function(e){
        var html="";
       
        let passcode=$(this).val();
        $.get('../search_by_office/'+passcode,function(data){
         if(data=='stringIsEmpty'){
             $('.error-msg').empty().append('<h4 class="card-title text-center text-danger">!OOPS NO RECORD FOUND</h4>');

         }else{
          $('.error-msg').empty();
             var value=JSON.parse(data);
             for(var i=0; i < value.length;  ++i){
             html+=                 '<tr>'+
                                    '<td>'+value[i].date+'</td>\
                                    <td>'+value[i].reference_no+'</td>\
                                    <td>'+value[i].invoice_no+'</td>\
                                   <td>'+value[i].truck_no+'</td>\
                                   <td>'+value[i].costum_office+'</td>\
                                   <td>\
                                   <a href="../inventory1_edit/'+value[i].id+'" class="btn btn-info"><i class="fa fa-edit"></i></a>\
                                   <a href="../view_inventory/'+value[i].id+'" class="btn btn-success"><i class="fa fa-eye"></i></a>\
                                   <button class="del btn btn-danger" data-id="'+value[i].id+'"><i class="fa fa-trash"></i></a>\
                                   </td>\
                                  </tr>' 

                 }        
                 $('.tableContent').empty().append(html);  
                 $('.del').on('click',function(){
                  let id=($(this).data('id'));
                  delete1(id);
               
                  
                 })      
          
         }
        })
    })
  })