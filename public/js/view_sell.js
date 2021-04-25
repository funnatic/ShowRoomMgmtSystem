function delete1(id){
    alert(id);
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
        $('.error-msg').empty();
        var html="";
        let passcode=$(this).val();
        $.get('../search_sell_by_office/'+passcode,function(data){
         if(data=='stringIsEmpty'){
             $('.error-msg').empty().append('<h4 class="card-title text-center text-danger">!OOPS NO RECORD FOUND</h4>');

         }else{
             var value=JSON.parse(data);
             for(var i=0; i < value.length;  ++i){
             html+=                 '<tr>'+
                                    '<td>'+value[i].date+'</td>\
                                    <td>'+value[i].invoice_no+'</td>\
                                    <td>'+value[i].registration_no+'</td>\
                                    <td>'+value[i].chalan_no+'</td>\
                                    <td>'+value[i].engine+'</td>\
                                    <td>'+value[i].value+'</td>\
                                   <td>'+value[i].discount+'</td>\
                                   <td>'+value[i].net_value+'</td>\
                                   <td>\
                                   <a href="../inventory1_edit/'+value[i].id+'" class="btn btn-info"><i class="fa fa-edit"></i></a>\
                                   <button data-id="'+value[i].id+'" class="btn btn-success"><i class="fa fa-print"></i></button>\
                                   <button class="delete btn btn-danger" data-id="'+value[i].id+'"><i class="fa fa-trash"></i></a>\
                                   </td>\
                                  </tr>' 

                 }        
                 $('.sales_view_content').empty().append(html);  
                 $('.del').on('click',function(){
                  let id=($(this).data('id'));
                  delete1(id);
               
                  
                 })      
          
         }
        })
    })
  })