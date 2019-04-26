@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Sign In Below:</h1>
      <p>Please enter your email and password. </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="email"> <span class="text-danger">*</span> Email:</label>
          <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
          <span class="text-danger"> {{ $errors->first('email' )}}</span>
        </div>
        <div class="form-group">
          <label for="password"> <span class="text-danger">*</span> Password:</label>
          <input type="password" name="password" id="password" class="form-control">
          <span class="text-danger"> {{ $errors->first('password' )}}</span>
        </div>
        <p class="lead">Don't have an account? &nbsp;<a class="font-weight-5" href="{{ url('user/signup') }}">Sign
            up</a></p>
        <input type="submit" value="Sign in" name="submit" class="btn btn-primary">
        @if( !empty($auth_error))
        <span class="text-danger">{{ $auth_error }}</span>
        @endif

      </form>
    </div>
  </div>
</div>
@endsection