<x-headers/>
<script src="{{asset('js/inventory.js')}}"></script>


       
        <form id="form">
            
            <div class="card-deck border">
                <div class="card">
                <div class="card-body card-text border">
                    <input type="text" name="inventory1_id" value="" class="form-control" id="inventory1_id" hidden required> 
                    <div class="form-group">
                   <label for="Chasis">Chasis</label>
                   <input type="text" name="chasis" class="form-control" id="chasis" required>
                   </div>
                <div class="form-group">
                    <label for="Engine:">Engine</label>
                    <input type="text" name="engine" class="form-control" id="engine" required>
                    </div>
            
                    <div class="form-group">
                        <label for="Capicity">Capacity</label>
                        <input type="text" name="capacity" class="form-control" id="capacity" required>
                        </div>
                </div>
            </div>
                <div class="card">
                    <div class="card-body card-text">
                        <div class="form-group">
                            <label for="Fuel">Fuel</label>
                            <input type="text" name="fuel" class="form-control" id="fuel" required>
                            </div>
            
                            <div class="form-group">
                                <label for="Color">Color</label>
                                <input type="text" name="color" class="form-control" id="color" required>
                                </div>
            
                                
                            <div class="form-group">
                                <label for="Brand">Brand</label>
                                <input type="text" name="brand" class="form-control" id="brand" required>
                                </div>
                                <div class="form-group">
                                    <label for="Model">Model</label>
                                    <input type="text" name="model" class="form-control" id="model" required>
                                    </div>
                                    
                    </div>
            </div>
        </div>
            <button class="btn btn-success mx-auto d-block mt-2">ADD</button>
        </form>
  
