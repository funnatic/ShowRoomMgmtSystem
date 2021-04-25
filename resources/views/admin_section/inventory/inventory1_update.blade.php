
@extends('admin_section.master_layout')
<script src="{{asset('js/branch_list.js')}}"></script>
@section('content')
    <div class="header mt-4">
        <h4 class="card-title text-center">INVENTORY FORM 1</h4>
    <div>
    <form action="{{url('../inventory1_update/'.$data->id)}}" method="POST">   
      
    @csrf
      <div class="row">  
          <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="Date:">Date</label>
            <input type="date" name="date" value="{{$data->date}}" class="form-control" required>
            </div>
    <div class="form-group">
    <label for="reference_no">Reference_No</label>
    <input type="text" name="reference_no" value="{{$data->reference_no}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="Invoice_No:">Invoice_No</label>
        <input type="text" name="invoice_no" value="{{$data->invoice_no}}" class="form-control" required>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">

        <div class="form-group">
            <label for="Exporter">Exporter</label>
            <input type="text" name="exporter" value="{{$data->exporter}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Importer">Importer</label>
                <input type="text" name="importer" value="{{$data->importer}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Truck_NO">Truck_NO</label>
                    <input type="text" name="truck_no" value="{{$data->truck_no}}" class="form-control" required>
                    </div>
    </div>
    <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label for="Custom_Office">Custom_Office</label>
                        <select name="costum_office" class="form-control">
                            <option value="Rani Bhansar">Rani Bhansar</option>
                            <option value="Birgunj Bhansar">Birgunj Bhansar</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="Custom_Office">Office</label>
                            <select name="passcode" value="{{$data->passcode}}" class="passcode form-control">
                              
                            </select>
                            </div>
    </div>
</div>
                        <button class="btn btn-success mx-auto d-block" type="submit">Update</button>
    </form>
@endsection
