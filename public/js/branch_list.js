$('document').ready(function(e){
     var html=""
    $.get('branch_list',function(data){
        var list=JSON.parse(data);
        for(var i=0; i<list.length; ++i){
           html+='<option value="'+list[i].passcode+'">' +list[i].office+ '</option>'
        }
        $('.passcode').append(html);
    })

})