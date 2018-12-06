/*
Site Name: Samviti
Site URI: www.samviti.com
Author: Global Web Technologies LLP
Author URI: http://globalwebtechnologies.com/
*/

function randomNumber(min,max){return Math.floor(Math.random()*(max-min+1)+min);};$('#captchaOperation').html([randomNumber(1,100),'+',randomNumber(1,200),'='].join(' '));$('#order').bootstrapValidator({message:'This value is not valid',fields:{txtname:{group:'.col-lg-4',validators:{notEmpty:{message:'Name is required and cannot be empty'}}},txtemail:{validators:{emailAddress:{message:'Email is not a valid email address'}}},firstFile:{validators:{notEmpty:{message:'File is required'}}},'options[]':{validators:{notEmpty:{message:'Please specify at least one language you can speak'}}},'programs[]':{validators:{choice:{min:2,max:4,message:'Please choose 2 - 4 programming languages you are good at'}}},captcha:{validators:{callback:{message:'Wrong answer',callback:function(value,validator){var items=$('#captchaOperation').html().split(' '),sum=parseInt(items[0])+parseInt(items[2]);return value==sum;}}}}}});$('#validateBtn').click(function(){$('#defaultForm,#regst,#forgot,#updat_pass').bootstrapValidator('validate');});$('#resetBtn').click(function(){$('#defaultForm').data('bootstrapValidator').resetForm(true);});$('.addPhoneButton').on('click',function(){var $that=$(this),$add_more=$('#add_more'),$newRow=$add_more.clone().removeAttr('id').insertBefore($add_more).show();$that.parent().addClass('disabled');var fieldName=$that.attr('data-name');$newRow.find('.control-label').html($that.html()).end().find('input').attr('name',fieldName).end().on('click','.removeButton',function(){$('#contactForm').bootstrapValidator('removeField',fieldName);$that.parent().removeClass('disabled');$newRow.remove();});$('#defaultForm').bootstrapValidator('addField',fieldName,{message:' phone number is not valid',validators:{digits:{message:' value can contain only digits'}}});});$('#defaultForm,#regst,#forgot,#updat_pass').bootstrapValidator({message:'This value is not valid',feedbackIcons:{valid:'glyphicon ti-check-box',invalid:'ti-close',validating:'ti-check-box'},fields:{
	
	phone:{message:' Phone is not valid',validators:{inclusive:true,notEmpty:{message:' Phone is required .'},stringLength:{min:6,max:30,message:' Phone must be more than 6 and less than 13 characters long'},regexp:{regexp:"^[0-9]*$",message:' Phone can only consist of alphabetical, number, dot and underscore'}}},
	
	otp:{message:' OTP is not valid',validators:{inclusive:true,notEmpty:{message:' OTP is required .'},stringLength:{min:6,max:8,message:' OTP must be more than 6 and less than 8 characters long'},regexp:{regexp:"^[0-9]*$",message:' OTP can only consist of alphabetical, number, dot and underscore'}}},

phone_home:{message:' Phone is not valid',validators:{inclusive:true,notEmpty:{message:' Home Phone is required .'},stringLength:{min:6,max:30,message:' Home Phone must be more than 6 and less than 13 characters long'},regexp:{regexp:"^[0-9]*$",message:' Home Phone can only consist of alphabetical, number, dot and underscore'}}},phone_office:{message:' Office Phone is not valid',validators:{inclusive:true,notEmpty:{message:' Office Phone is required .'},stringLength:{min:6,max:30,message:' Office Phone must be more than 6 and less than 13 characters long'},regexp:{regexp:"^[0-9]*$",message:' Office Phone can only consist of alphabetical, number, dot and underscore'}}},isaccomp:{validators:{notEmpty:{message:' Please select yes or no .'}}},fname:{validators:{notEmpty:{message:''}}},lname:{validators:{notEmpty:{message:''}}},country:{validators:{notEmpty:{message:' Country is required .'}}},
state:{validators:{notEmpty:{message:' State is required .'}}},

startdate:{validators:{notEmpty:{message:' Start Date is required .'}}},
starttime:{validators:{notEmpty:{message:' Start Time is required .'}}},
enddate:{validators:{notEmpty:{message:' End Date is required .'}}},
endtime:{validators:{notEmpty:{message:' End Time is required .'}}},

designation:{validators:{notEmpty:{message:'Designation is required .'}}},title:{validators:{notEmpty:{message:'Title is required .'}}},code:{validators:{notEmpty:{message:'Code is required .'}}},regtype:{validators:{notEmpty:{message:'Registration Type is required .'}}},company:{validators:{notEmpty:{message:'Company is required .'}}},category:{validators:{notEmpty:{message:'Category is required .'}}},absfile:{validators:{notEmpty:{message:'Abstract Category is required .'}}},sno:{validators:{notEmpty:{message:'S. No is required .'}}},fathername:{validators:{notEmpty:{message:'Fathers Name is required .'}}},pno:{validators:{notEmpty:{message:'Passport No is required .'}}},bplace:{validators:{notEmpty:{message:'Place of birth is required .'}}},issuedate:{validators:{notEmpty:{message:'Date of issue is required .'}}},expdate:{validators:{notEmpty:{message:'Expiry Date is required .'}}},institute:{validators:{notEmpty:{message:'institute is required .'}}},department:{validators:{notEmpty:{message:'Department is required .'}}},nationality:{validators:{notEmpty:{message:'Nationality Type is required .'}}},street:{validators:{notEmpty:{message:'Street Type is required .'}}},city:{validators:{notEmpty:{message:'City Type is required .'}}},ZipCode:{validators:{notEmpty:{message:'Zip-Code Type is required .'}}},address:{validators:{notEmpty:{message:'Drganization is required .'}}},

comment:{validators:{notEmpty:{message:' Comment is required .'}}},

acceptTerms:{validators:{notEmpty:{message:'You have to accept the terms and policies'}}},name:{validators:{notEmpty:{message:' Name is required .'}}},gender:{validators:{notEmpty:{message:' gender is required .'}}},dob:{validators:{notEmpty:{message:' Year of Birth is required .'}}},senderCity:{validators:{notEmpty:{message:' City is required .'}}},zipCode:{validators:{notEmpty:{country:'US',message:' input is not a valid zip code'},stringLength:{min:6,max:30,message:' zip code must be more than 6 and less than 13 characters long'},regexp:{regexp:"^[0-9]*$",message:' zip code can only consist of alphabetical, number, dot and underscore'}}},

email:{validators:{notEmpty:{message:' Email is required .'},
emailAddress:{message:' input is not a valid Email address'}}},

website:{validators:{notEmpty:{message:' Website is required .'}}},
subject:{validators:{notEmpty:{message:' Subject is required .'}}},


phoneNumberUS:{validators:{phone:{message:' input is not a valid US phone number'}}},phoneNumberUK:{validators:{phone:{message:' input is not a valid UK phone number',country:'GB'}}},color:{validators:{color:{type:['hex','rgb','hsl','keyword'],message:'Must be a valid %s color'}}},colorAll:{validators:{color:{}}},captcha:{validators:{callback:{message:'Wrong answer',callback:function(value,validator){var items=$('#captchaOperation').html().split(' '),sum=parseInt(items[0])+parseInt(items[2]);return value==sum;}}}},

pass:{validators:{notEmpty:{message:' Password is required .'}}},
password:{validators:{notEmpty:{message:' Password is required .'},identical:{field:'confirmPassword',message:' password and its confirm are not the same'}}},confirmPassword:{validators:{notEmpty:{message:' confirm password is required .'},identical:{field:'password',message:' password and its confirm are not the same'}}},


user_password_new:{validators:{notEmpty:{message:' Password is required .'},identical:{field:'user_password_repeat',message:' password and its confirm are not the same'}}},user_password_repeat:{validators:{notEmpty:{message:' confirm password is required .'},identical:{field:'user_password_new',message:' password and its confirm are not the same'}}},



ages:{validators:{lessThan:{value:100,inclusive:true,message:' ages has to be less than 100'},greaterThan:{value:10,inclusive:false,message:' ages has to be greater than or equals to 10'}}}}});