@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">

                  <section class="form-simple">

                      <!--Form with header-->
                      <div class="card">

                          <!--Header-->
                        <!--  <div class="header pt-3 navbar-dark primary-color " style="color:#fff; ">

                              <div class="row d-flex justify-content-start">
                                  <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5 ">Log in</h3>
                              </div>

                          </div>-->
                          <!--Header-->
  <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="card-body mx-4 mt-0">

                              <!--Body-->
                              <div class="md-form">
                                  <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required="required">
                                  <label for="email" class=""><sup style="color:#F00;">*</sup>{{ __('E-Mail') }}</label>
                                  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 <div class="invalid-feedback">Please enter email address.</div>
                              </div>

                              <div class="md-form pb-3">
                                  <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="required">
                                  <label for="password" class=""><sup style="color:#F00;">*</sup>{{ __('Password') }}</label>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  <div class="invalid-feedback">
          Please enter password.
        </div>
                                 <p class="pull-left" style="margin-top:-10px;"> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label></p>
                                  
                                  <p class="font-small grey-text d-flex justify-content-end">Forgot
                                      <a href="{{ route('password.request') }}" class="dark-grey-text font-weight-bold ml-1"> Password?</a>
                                  </p>
                              </div>


                              <div class="text-center mb-4">
                                  <button type="submit" class="btn btn-block btn-info waves-effect waves-light">Log in</button>
                              </div>
                              <p class="font-small grey-text d-flex justify-content-center">Don't have an account?
                                  <a href="{{route('register')}}" class="dark-grey-text font-weight-bold ml-1"> Request for a new account</a>
                              </p>

                          </div>
</form>
                      </div>
                      <!--/Form with header-->

                  </section>

              </div>
    </div>
</div>
@endsection
