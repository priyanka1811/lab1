@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!--<div class="card-header">{{ __('Register') }}</div>-->

                <div class="card-bodyy">
                    <form class="needs-validation" novalidate method="POST" action="{{url('/request-account')}}">
                        @csrf
  <div class="card-body mx-4 mt-0">
                        <div class="md-form">
                                <label for="name" class=""><sup style="color:#F00;">*</sup>{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                 <div class="invalid-feedback">Please enter name.</div>
                        </div>

                        <div class="md-form">
                            <label for="email" class=""><sup style="color:#F00;">*</sup>{{ __('E-Mail') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="md-form">
                                                    <label for="email" class=""><sup style="color:#F00;">*</sup>{{ __('Phone no.') }}</label>
                        
                                                        <input id="phone" type="tel" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                                                        @if ($errors->has('phone'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                        <div class="invalid-feedback">Please enter phone number.</div>
                                                </div>
                                             
          
                                                <div class="md-form">
                                                   <!-- <label for="account_typo" class=""><sup style="color:#F00;">*</sup>{{ __('Account Type') }}</label>-->
                          <div class="col-md-12" > 
                        <label for="defaultFormEmailModalEx"><sup style="color:#F00;">*</sup>Account type</label>
                        <br />
                        <div class="custom-control custom-radio" style="margin-left:12px;">
    <input type="radio" name="account_type" value="Lab" id="customControlValidation1"  class="custom-control-input" required>
    <label class="custom-control-label" for="customControlValidation1">I want to create lab profile</label>
  </div>
  <div class="custom-control custom-radio" style="margin-left:12px;">
    <input type="radio" name="account_type" value="Vendor" class="custom-control-input" id="customControlValidation2" required>
    <label class="custom-control-label" for="customControlValidation2">I want to create vendor profile</label>
         
                                                       
  </div>
   @if ($errors->has('account_type'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('account_type') }}</strong>
                                                            </span>
                                                        @endif
      <div class="invalid-feedback">Please select account type</div>
      </div>

                                                   
                                                </div>
                                                
                                     <div class="md-form">  
                                     
                                     <input class="typeahead form-control mdb-autocomplete" style="margin:0px auto;" type="text" autocomplete="off" name="institution_company" value="{{ old('institution_company') }}" required="required">         
<!--<input type="search" name="institution_company" required="required" id="form-autocomplete" class="form-control mdb-autocomplete">-->
  <label for="form-autocomplete" class="active"><sup style="color:#F00;">*</sup>University or Company name</label>
          <div class="invalid-feedback">Please enter university or company name.</div>
           </div>                                     
                                                
                                                
                                                
                      <!--  <div class="md-form">
                            <label for="password" class=""><sup style="color:#F00;">*</sup>{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback">Please enter password.</div>
                        </div>

                        <div class="md-form">
                            <label for="password-confirm" class=""><sup style="color:#F00;">*</sup>{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <div class="invalid-feedback">Please enter password again.</div>
                        </div>
                        -->
 							<div class="text-center mb-4">
                                  <button type="submit" class="btn btn-block btn-info waves-effect waves-light">Request a new account</button>
                              </div>
                             <p class="font-small grey-text d-flex justify-content-center">Already have an account?
                                  <a href="{{route('login')}}" class="dark-grey-text font-weight-bold ml-1"> Login</a>
                              </p>  
                            
                       <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-block btn-info waves-effect waves-light">
                                    {{ __('Request a new account') }}
                                </button>
                            </div>
                        </div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
