@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form class="needs-validation" novalidate method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
<div class="card-body mx-4 mt-0">
                       <div class="md-form">
                            <label for="email" class=""><sup style="color:#F00;">*</sup>{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback">Please enter email.</div>
                        </div>

                         <div class="md-form">
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
                                 <div class="invalid-feedback">Please enter password.</div>
                        </div>
								<div class="text-center mb-4">
                                  <button type="submit" class="btn btn-block btn-info waves-effect waves-light">{{ __('Reset Password') }}</button>
                              </div>
                        <!--<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
