<x-headers/>
<section>
    <h4 class="text-center mb-2 text-bold "> PERMISSION FOR DELIVERY OF TRACTORS TO CUSTOMER</h4>
    <div class="content">
       <div class="form">

        <div class="row">
            <div class="col1 col-sm-12 col-md-3 col-lg-3 ">
                <div class="form-group d-flex">
                    <label for="Chalan">S.NO:</label>
                    <input type="text" name="achalan" class="achalan">
    
                </div>
                <div class="form-group d-flex">
                    <label for="Date">Date:</label>
                    <input type="text" name="aDate" class="aDate">
    
                </div>
                <label> CUTOMER'S NAME $ ADDRESS </label>
                <div class="form-group">
                    <input type="text" name="cname" class="cname">
                </div>
                <div class="form-group">
                    <input type="text" name="address1" class="address1">
                </div>
                <div class="form-group mb-2">
                    <input type="text" name="address2" class="address2">
                </div>
               
                        <div class="form-group d-flex">
                            <label for="Contact">Phone:</label>
                            <input type="text" name="acontact" class="acontact">
                </div>
            </div>

            <div class="col1 cols-sm-12 col-md-4 col-lg-4">
                <div class="form-group d-flex">
                    <label for="Branch">Branch:</label>
                    <input type="text" name="abranch" class="abranch">
    
                </div>
                <div class="form-group d-flex">
                    <label for="Staff">Sales Man:</label>
                    <input type="text" name="sname" class="sname">
    
                </div>
            </div>
            <div class="letf cols-sm-12 col-md-5 col-lg-5">

               <div class="approval-logo">
                   <img src="{{asset('bg-images/bg-auth.jpg')}}"style="width:200px;height:80px; margin-top:5px;">
                   <h6 class="mt-2">EVOLVING AGRICULTURE</h6>
               </div>
               <label>TRACTOR MODEL</label>
                <div class="form-group">
                    <input type="text" name="amodel" class="amodel">
                </div>
                <div class="form-group">
                    <input type="text">
             </div>
      
            </div>
            
        <div class="row">
            <div class="letf cols-sm-12 col-md-4 col-lg-4">
                <h6> LAND TO KEPT & VALUE</h6>
                <div class="form-group">
                    <input type="text">
                </div>
                <div class="form-group">
                    <input type="text">
                </div>
                <label> VALUE OF GOODS REQUIRED</label>
                <table class="table1">
                    <tr>
                        <td class="tdleft"> Tractor</td><td class="tdright">Rs:<input type="text" name="tractor" class="tractor"></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">Cultivator</td><td class="tdright">RS:<input type="text" name="cultivator" class="cultivator"></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">Trolley</td><td class="tdright">RS:<input type="text" name="null" class="null"></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft"></td><td class="tdright">RS:<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">TOTAL</td><td class="tdright">RS:<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">DISCOUNT</td ><td class="tdright">RS<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">FOC</td><td class="tdright">RS:<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">BANK EXP.</td><td class="tdright">RS:<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">Other EXP.</td><td class="tdright">RS<input type="text" name="" class=""></td>
                        
                    </tr>
                    <tr>
                        <td class="tdleft">Total value Realised</td><td class="tdright">RS<input type="text" name="" class=""></td>
                        
                    </tr>
                </table>
                <br>
                <h6>H.O.Copy</h6>
            </div>
            <div class="letf cols-sm-12 col-md-4 col-lg-4">
                <h6 class="ml-4"> Bank/FInance Institution/Cash</h6>
                <h6 class="ml-4"> Customer's Contribution:</h6>
                <h6 class="ml-4"> Subsequent Installments:</h6>
                
            </div>
            <div class="letf cols-sm-12 col-md-4 col-lg-4 ">
                <br>
                <table>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Rs.</td><td><input type="text"></td></tr>
                    <tr><td class="td2">Total Rs.</td><td><input type="text"></td></tr>
                </table>
                <div class="form-group">
                    <label>Agent's Name & Address</label>
                    <input type="text">
                    <input type="text">
            </div>
           
       
        <div class="row">
            <div class="letf cols-sm-12 col-md-6 col-lg-6">
                <div class="form-group d-flex">
                    <label for="Contact">Contact:</label>
                    <input type="text" name="contact" class="contact">
    
                </div>
            </div>
        </div>
        <div class="form-group">
           
            <input type="text">
            <label>Approving Authority</label>
    </div>
        </div>
       
</div>
</div> 


</section>

<style>

@media print {
    .modal {
        position: absolute;
        left: 0;
        top: 0;
        margin: 0;
        padding: 0;
        overflow: visible!important;
    }
}

    .form{
        margin:0px 3%;
    }
   section{
       margin:0;
       padding:0;
   }
    .approval-logo{
      
        font-size: 12px;
        font-weight: bold;

       
    }
   
    input{
        border-left-style: none;
        border-right-style: none;
        border-top-style: none;
       
    }
    .content{
        border:1px solid black;
        background:white;
        margin:2px;
       
    }
    .table1{
        border-top:1px solid black;
       
            
        
    }
  .table1 td{
      border:1px solid black;
      font-weight: bold;
     
  }
  .table1 input{
      border:none;
  }
 .table1 .tdleft{
     border-left:none;
 }
 .table1 .tdright{
     border-right:none;
 }
 .td2{
     width:10px;
 }

 label{
     font-weight:bolder;
     
 }

</style>
<script>
   
  
    
    </script>