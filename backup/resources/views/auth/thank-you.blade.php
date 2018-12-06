@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
               
               <section class="form-simple">

                      <!--Form with header-->
                      <div class="card">
              @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <h4>Following errors occurred:</h4>
            @foreach($errors->all() as $error)
             <p> {{ $error }}</p>
            @endforeach
    </div>
@endif
  @if(session()->has('err'))
    <div class="alert alert-danger" role="alert">
        <h4>Following errors occurred:</h4>
           {{ Session::get('err') }}       
    </div>
@endif
 @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}     
    </div>
@endif
                          

                </div>
                </section>
        </div>
    </div>
</div>
@endsection
