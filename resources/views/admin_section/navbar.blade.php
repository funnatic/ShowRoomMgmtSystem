
<x-headers/>
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">



<nav class="nav">
    <input type="checkbox" id="check" >
    <label for ="check" class='checkbtn'><i class="fa fa-bars"></i></label>
    <label class="logo">Logo</label>

    <ul>
        <li><a href="{{url('dashboard')}}" class="active">Dashboard</a></li>
        <li><a href="{{url('inventory/'.session('data')[0]['passcode'])}}">Inventory</a></li>
        <li><a href="{{url('sales/'.session('data')[0]['passcode'])}}">Sales</a></li>
        <li><a href="#">Payment </a></li>
           
    </ul>
</nav>



