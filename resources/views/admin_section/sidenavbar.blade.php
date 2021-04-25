<link rel="stylesheet" href="{{asset('css/sidenavbar.css')}}">


<div class="sidenavbar">
    <input type="radio" name="same" class="input" id="r1">
    <input type="radio" name="same"class="input" id="r2">
    <div class="content">
        <label for="r1" class="fa fa-bars" id="bars"></label>
        <label for="r2" class="fa fa-times" id="times"></label>
        <div class='outer'>
            <div class="logo"></div>
            <div class="title">
                Code with ashish
            </div>
        </div>
        <ul class="list-unstyled">
            <li id="toggle1"><a href="#">Store
                <span><i class="fa fa-caret-down" id="arrow1"></i></span>
            </a></li>
           
                <li id="nested1"><a href="{{url('finventory')}}">Entry</a></li>
                <li id="nested2"><a href="{{url('inventory/'.session('data')[0]['passcode'])}}">View</a></li>
            
           
            <li id="toggle2"><a href="#">Sales
                <span><i class="fa fa-caret-down" id="arrow2"></i></span>
            </a></li>
                
                    <li id="nested3"><a href="{{url('sales')}}">Entry</a></li>
                    <li id="nested4"><a href="{{url('sales/'.session('data')[0]['passcode'])}}">View</a></li>
                
                </li>
                <li id="toggle3"><a href="#">Staff
                    <span><i class="fa fa-caret-down" id="arrow3"></i></span>
                </a></li>
                    
                        <li id="nested5"><a href="{{url('staff')}}">Entry</a></li>
                        <li id="nested6"><a href="">View</a></li>
                    
                    
                   
                       
                        
        </ul>
    </div>
</div>

<script>
    $('#toggle1').click(function(e){
        if($('#nested1,#nested2').css('display')=='none'){
        $('#nested1,#nested2').css('display','block');
        $('#arrow1').css({'transform':'rotate(180deg)','color':'#12fff1','text-shadow':'0 0 5px #12fff1'});
     }else{
        $('#nested1,#nested2').css('display','none');
        $('#arrow1').css({'transform':'rotate(0deg)','color':'#fff','text-shadow':'none'});
     }
    })
    $('#toggle2').click(function(e){
        if($('#nested3,#nested4').css('display')=='none'){
        $('#nested3,#nested4').css('display','block');
        $('#arrow2').css({'transform':'rotate(180deg)','color':'#12fff1','text-shadow':'0 0 5px #12fff1'});
     }else{
        $('#nested3,#nested4').css('display','none');
        $('#arrow2').css({'transform':'rotate(0deg)','color':'#fff','text-shadow':'none'});
     }
    })
    $('#toggle3').click(function(e){
        if($('#nested5,#nested6').css('display')=='none'){
        $('#nested5,#nested6').css('display','block');
        $('#arrow3').css({'transform':'rotate(180deg)','color':'#12fff1','text-shadow':'0 0 5px #12fff1'});
     }else{
        $('#nested5,#nested6').css('display','none');
        $('#arrow3').css({'transform':'rotate(0deg)','color':'#fff','text-shadow':'none'});
     }
    })
    </script>