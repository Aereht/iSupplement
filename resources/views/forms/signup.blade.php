@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Sign up for free down below:</h1>
      <p>Lorem ipsum dolor sit amet. </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="name"> <span class="text-danger">*</span> Name:</label>
          <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
          <span class="text-danger"> {{ $errors->first('name' )}}</span>
        </div>
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
        <input type="submit" value="Sign up" name="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>

@endsection