@extends('layouts.app')

@section('content')

    <div class="container">

      <div class="row">

<div class="col-lg-12 col-md-12">
<section id="request">
<br>
 <!-- <h2 class="primary-heading">request</h2>-->
        <div class="card">

          <h5 class="card-header info-color white-text text-center py-4">
            <strong>RFQ</strong>
          </h5>
          <div id="errormsg"></div>
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
          <h5 class=" py-4">
            <strong>Enter the below details and send RFQ to Vendor</strong>
          </h5>
    
            <form class="needs-validation" id="rfqform" novalidate  style="color: #757575;" method="post" action="{{ route('rfq-store') }}">
            <div class="field_wrapper">
            <div>
            <div class="form-row">
            <div class="col-md-6">
                <!-- First name -->
                <div class="md-form">
                  <input type="text" name="vendor" value="" id="materialRegisterFormFirstName" class="form-control" required>
                  <label for="materialRegisterFormFirstName" class=""><sup style="color:#F00;">*</sup> Vendor</label>
                  <div class="invalid-feedback" id="vendor">
                           Please choose a vendor.
                  </div>

                </div>
            </div>
            <div class="col-md-6">
                <!-- First name -->
                <div class="md-form">
                <select class="mdb-select md-form" name="approved_by" require>
                  <option value="" disabled selected>* Approved By</option>
                  <option value="1">User 1</option>
                  <option value="2">User 2</option>
                  <option value="3">User 3</option>
                </select>
                <div class="invalid-feedback" id="approved_by">
                           Please choose a Approved By.
                </div>
                </div>
            </div>
            </div>
            <div class="form-row">
               <div class="col-md-6">
                          <!-- Last name -->
                  <div class="">
                  <select class="mdb-select md-form" name="category_type[]">
                    <option value="" disabled selected>Choose Category Type</option>
                    <option value="1">Chemicals</option>
                    <option value="2">Animals</option>
                    <option value="3">General Supply</option>
                  </select>
                  <div class="invalid-feedback" id="category_type.0">
                           Please choose a Approved By.
                  </div>
                  </div>
                  </div>
                <div class="col-md-6">
                   <!-- Last name -->
                    <div class="md-form">
                      <input type="text" name="catalogue[]" id="catalogue" class="form-control" required>
                      <label for="catalouge" class=""><sup style="color:#F00;">*</sup> Catalogue #</label>
                  <div class="invalid-feedback" id="catalogue_0">
                     Please enter catalouge number.
                   </div>
                </div>
                 </div>
                      </div>
                      
                      <div class="form-row">
                      <div class="col-md-6">
                          <!-- First name -->
                          <div class="md-form">
                            <input type="text" name="item_name[]" value="" id="itemname" class="form-control" required>
                            <label for="itemname" class=""><sup style="color:#F00;">*</sup> Item Name</label>
                            <div class="invalid-feedback">
                  Please enter item name.
                </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- First name -->
                          <div class="md-form">
                            <input type="text" name="size[]" value="" id="unitsize" class="form-control">
                            <label for="unitsize" class=""> Unit Size</label>
                          </div>
                        </div>
                      </div>
                      
        <div class="form-row">
                      
                        <div class="col-md-6">
                          <!-- Last name -->
                          <div class="md-form">
                            <input type="text" name="quantity[]" value="" id="qty" class="form-control {{ $errors->has('quantity.0') ? ' is-invalid' : '' }}">
                            <label for="qty" class=""> Qty</label>
                            @if ($errors->has('quantity.0'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>The quantity field is required.</strong>
                                    </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          
                          <div class="md-form">
                            <input type="text" name="url[]" value="" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName" class=""> Url</label>
                          </div>
                        </div>
                      </div>
          
        <div class="form-row">
                
                <div class="col-md-6">
            <div class="custom-control custom-checkbox">
            <input type="checkbox" name="urgent[]" class="custom-control-input clickcheck" id="u">
            <label class="custom-control-label" for="u">Urgent</label>
            </div>
                </div>
                
                <div class="col-md-6 hide">
                <div class="md-form">
                <input type="text" placeholder="Select date"  value="" name="urgent_date[]"  id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example"> Needed by</label>
                <div class="invalid-feedback">
                        Please select a date.
                </div>

        </div>
                </div>
                
            </div>

        </div>

        </div>
            <button class="btn btn-info my-4 waves-effect waves-light pull-left add_button" type="button"><i class="fa fa-plus"></i> Add New Item</button>

            <hr>
            
            <button class="btn btn-info my-4 waves-effect waves-light pull-right" id="submit">Send</button>
            <!--<button class="btn btn-info my-4 waves-effect waves-light pull-right" type="submit">Cancel</button>-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           </form>

          </div>
          </div>

</section>
  </div>
      </div>
    </div>
@endsection   
@section('jsFunctions')
<script type="text/javascript" src="{{asset('/js/rfq/createRfq.js')}}"></script> 
<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery('#submit').click(function(e){
    e.preventDefault();
    var formData = $("#rfqform").serialize()
    console.log(formData);
    jQuery.ajax({
      url: "{{ url('/rfq/store') }}",
      method: 'post',
      data: formData,
      success: function(data){
        if(data.code == 200){
          window.location = "{{ url('/rfq') }}";
          //console.log(data);
        }else{
         console.log(data.errors);
         arr = Object.keys(data.errors);
         for(i=0;i<arr.length;i++){
           /*if(arr[i].indexOf(".") < 1 || arr[i].indexOf(".") == ''){
             var kid = arr[i].replace(".","_");
             console.log(kid);
             jQuery("#"+kid).css("display","block");
           }else{
            jQuery("#"+arr[i]).css("display","block");
           }*/
           
         }
        }
      }
    });
  });
});
</script> 
@endsection  
