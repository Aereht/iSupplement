@php
$menu = App\Menu::all()->toArray();
$errors_top = true;
@endphp

@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>OOPS! Page Not Found</h1>
      <p class="lead h1">Error 404</p>
    </div>
  </div>
</div>
@endsection