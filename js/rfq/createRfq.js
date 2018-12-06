$(document).ready(function(e) {
  //$('.hide0').css('display','none');
  $('.clickcheck').click(function(){
      if ($(this).is(":checked")) {
        var checkedrel = $(this).attr('rel');
        $('.hide'+checkedrel).show()
      }else{
        var checkedrel = $(this).attr('rel');
        $('.hide'+checkedrel).hide();
    }
  });		
});

$('.datepicker').pickadate();
// Material Select Initialization

// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$(document).ready(function(){
  var maxField = 10; //Input fields increment limitation
  var addButton = $('.add_button'); //Add button selector
  var wrapper = $('.field_wrapper'); //Input field wrapper
//var fieldHTML = '<div><div class="form-row"><div class="col-md-6"><div class="md-form"><select class="mdb-select1 md-form" name="category_type[]" required><option value="" disabled selected>Choose Category Type</option><option value="1">Chemicals</option><option value="2">Animals</option><option value="3">General Supply</option></select><div class="invalid-feedback">Please choose a category.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="catelog[]" value="" id="materialRegisterFormLastName" class="form-control" required><label for="materialRegisterFormLastName" class=""><sup style="color:#F00;">*</sup> Catalogue #</label><div class="invalid-feedback">Please enter catalouge number.</div></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="item_name[]" value="" id="materialRegisterFormFirstName" class="form-control" required><label for="materialRegisterFormFirstName" class=""><sup style="color:#F00;">*</sup> Item Name</label><div class="invalid-feedback">Please enter item name.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="size[]" value="" id="materialRegisterFormFirstName" class="form-control"><label for="materialRegisterFormFirstName" class=""> Unit Size</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="quantity[]" value="" id="materialRegisterFormLastName" class="form-control"><label for="materialRegisterFormLastName" class=""> Qty</label></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="url[]" value="" id="materialRegisterFormFirstName" class="form-control"><label for="materialRegisterFormFirstName" class=""> Url</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="custom-control custom-checkbox"><input type="checkbox" name="urgent[]" class="custom-control-input clickcheck" id="u2"><label class="custom-control-label" for="u2">Urgent</label></div></div><div class="col-md-6 hide"><div class="md-form"><input type="text" placeholder="Select date" data-value="2015/04/20" value="" name="urgent_date[]"  id="date-picker-example1" class="form-control datepicker1" required><label for="date-picker-example1"><sup style="color:#F00;">*</sup> Needed by</label><div class="invalid-feedback">Please select a date.</div></div></div></div><a href="javascript:void(0);" class="btn btn-info my-4 waves-effect waves-light pull-right remove_button"><i class="fa fa-remove mt-0"></i>Remove</a><div>';
  var x = 0; //Initial field counter is 1
  //Once add button is clicked
  $(addButton).click(function(){
  
      //Check maximum number of input fields
      if(x < maxField){ 
          x++; //Increment field counter
          //$(wrapper).append('<div><div class="form-row"><div class="col-md-6"><div class="md-form"><select class="mdb-select'+x+' md-form" name="category_type[]"><option value="" disabled selected>Choose Category Type</option><option value="1">Chemicals</option><option value="2">Animals</option><option value="3">General Supply</option></select><div class="invalid-feedback">Please choose a category.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="catalogue[]" value="" id="catalogue'+x+'" class="form-control" required><label for="catalouge'+x+'" class=""><sup style="color:#F00;">*</sup> Catalogue #</label><div class="invalid-feedback">Please enter catalouge number.</div></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="item_name[]" value="" id="itemname'+x+'" class="form-control" required><label for="itemname'+x+'" class=""><sup style="color:#F00;">*</sup> Item Name</label><div class="invalid-feedback">Please enter item name.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="size[]" value="" id="size'+x+'" class="form-control"><label for="size'+x+'" class=""> Unit Size</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="quantity[]" value="" id="quantity'+x+'" class="form-control"><label for="quantity'+x+'" class=""> Qty</label></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="url[]" value="" id="url'+x+'" class="form-control"><label for="url'+x+'" class=""> Url</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="custom-control custom-checkbox"><input type="checkbox" name="urgent[]" class="custom-control-input clickcheck" id="u'+x+'"><label class="custom-control-label" for="u'+x+'">Urgent</label></div></div><div class="col-md-6 hide"><div class="md-form"><input type="text" placeholder="Select date" name="urgent_date[]"  id="date-picker-example'+x+'" class="form-control datepicker"><label for="date-picker-example'+x+'">Needed by</label><div class="invalid-feedback">Please select a date.</div></div></div></div><a href="javascript:void(0);" class="btn btn-info my-4 waves-effect waves-light pull-right remove_button"><i class="fa fa-remove mt-0"></i>Remove</a><div>'); //Add field html
           $(wrapper).append('<div><div class="form-row"><div class="col-md-6"><div class="md-form"><select class="mdb-select'+x+' md-form" name="category_type[]"><option value="" selected>Choose Category Type</option><option value="1">Category 1</option><option value="2">Category 2</option><option value="3">Category 3</option></select><div class="invalid-feedback" id="category_type_'+x+'">Please choose a category.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="catalogue[]" value="" id="catalogue'+x+'" class="form-control" required><label for="catalouge'+x+'" class=""><sup style="color:#F00;">*</sup> Catalogue #</label><div class="invalid-feedback" id="catalogue_'+x+'">Please enter catalouge number.</div></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="item_name[]" value="" id="itemname'+x+'" class="form-control" required><label for="itemname'+x+'" class=""><sup style="color:#F00;">*</sup> Item Name</label><div class="invalid-feedback" id="item_name_'+x+'">Please enter item name.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="size[]" value="" id="size'+x+'" class="form-control"><label for="size'+x+'" class=""> Unit Size</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="md-form"><input type="text" name="quantity[]" value="" id="quantity'+x+'" class="form-control"><label for="quantity'+x+'" class=""> Qty</label><div class="invalid-feedback" id="quantity_'+x+'">The quantity field is required.</div></div></div><div class="col-md-6"><div class="md-form"><input type="text" name="url[]" value="" id="url'+x+'" class="form-control"><label for="url'+x+'" class=""> Url</label></div></div></div><div class="form-row"><div class="col-md-6"><div class="custom-control custom-checkbox"><input type="checkbox" name="urgent[]" class="custom-control-input clickcheck" id="u'+x+'"  rel="'+x+'"><label class="custom-control-label" for="u'+x+'">Urgent</label></div></div><div class="col-md-6"><div class="md-form hide'+x+'" style="display:none"><input type="text" placeholder="Select date" name="urgent_date[]"  id="date-picker-example'+x+'" class="form-control datepicker"><label for="date-picker-example'+x+'">Needed by</label><div class="invalid-feedback" id="urgent_date_'+x+'">Please select a date.</div></div></div></div><a href="javascript:void(0);" class="btn btn-info my-4 waves-effect waves-light pull-right remove_button"><i class="fa fa-remove mt-0"></i>Remove</a><div>'); //Add field html
      }
  $('.mdb-select'+x).material_select();
  $('.datepicker').pickadate();
  $('.clickcheck').each(function(){
    $(this).on("click", function(){
      if ($(this).is(":checked")) {
        var checkedrel = $(this).attr('rel');
        $('.hide'+checkedrel).show()
      }else{
        var checkedrel = $(this).attr('rel');
        $('.hide'+checkedrel).hide();
    }
    });
  });	
  });
  //Once remove button is clicked
  $(wrapper).on('click', '.remove_button', function(e){
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
  });
});