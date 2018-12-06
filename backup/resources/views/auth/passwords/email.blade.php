@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!--<div class="card-header">{{ __('Reset Password') }}</div>-->

                <div class="card-bodyy">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="needs-validation" novalidate method="POST" action="{{ route('password.email') }}">
                        @csrf
<div class="card-body mx-4 mt-0">
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
						<div class="text-center mb-4">
                                  <button type="submit" class="btn btn-block btn-info waves-effect waves-light">{{ __('Send Password Reset Link') }}</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
