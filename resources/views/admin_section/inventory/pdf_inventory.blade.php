<!DOCTYPE html>
<head>
    <x-headers/>
   
</head>
<body>
    <div class="title">
    <h2 class="card-title text-center ">NEPAL TRADE & SERVICE LINK</h2>
    <h5 class="card-title text-center">Morang,Biratnagar Sub Metroplitian</h5>
    </div>
    <div class="header">
        <table class="table table-borderless">
            <thead>
                <tr>
                <th>Date:</th>
                <th>{{$inventory1->date}}</th>
                <th>Costum Ref:</th>
                <th>{{"$inventory1->reference_no"}}</th>
                <th>Invoice No:</th>
                <th>{{$inventory1->invoice_no}}</th>
                </tr>
                <tr>
                <th colspan="6" class="border"></th>
                <tr>
                <th>Vehicle No:</th>
                <th>{{"$inventory1->truck_no"}}</th>
                <th>Custom Office:</th>
                <th colspan="2">{{$inventory1->costum_office}}</th>
                </tr>
                <tr>
                    <th colspan="6" class="border"></th>
               </tr>
                <tr>
                <th>Exporter:</th>
                <th colspan="2">{{$inventory1->exporter}}</th>
                <th>Importer:</th>
                <th colspan="2">{{"$inventory1->importer"}}</th>

                </tr>
            </thead>
        
        </table>
        <div class="divide"></div>
    </div>
    <div class="content">
    <div class="table-responsive">
        <table class="table table-bordered">
            
                <thead>
                    <tr>
                    <th>Chasis</th>
                    <th>Engine</th>
                    <th>Capacity.</th>
                    <th>Fuel</th>
                    <th>Color</th>
                    <th>Brand</th>
                    <th>Model</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($inventory2 as $i)
                        <tr>
                            
                            <td>{{$i->chasis}}</td> <td>{{$i->engine}}</td> <td>{{$i->capacity}}</td> <td>{{$i->fuel}}</td> 
                            <td>{{$i->color}}</td> <td>{{$i->brand}}</td> <td>{{$i->model}}</td>
                   
                            </tr>
                        @endforeach
                       
                    </tbody>          
        </table>
    </div>   

    </div>
</body>
</html>
<style>
.title{
    text-align: center;
    height:100px;
    color:red;

}
.table{
    margin-top:10px;
    margin-left:30px;
    font-size:16px;
}
.divide{
    height:1px;
    width:100%;
    background: black;
    margin-bottom: 5px;
    margin-top:20px;
}
.border{
    height:1px;
    background:black;
    margin-bottom: 10px;
}
    </style>