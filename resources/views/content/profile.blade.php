@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">{{Session::get('user_name')}}'s Profile</h1>
      <p>Lorem ipsum dolor sit amet.</p>
      <img width="100" height="100" src="{{ asset('images/profilepic.png')  }}" alt="Profile picture"><br>
      <div class="row">
        <div class="col-6">
          <span>{{Session::get('user_name')}}'s Picture </span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection