@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>iSupplement Shop</h1>
      <p class="lead">Our Shop Categories</p>
    </div>
  </div>
  <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
      <img height="200" src="{{asset('images/' . $category['cimage'])}}" alt="{{$category['ctitle']}} category">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h3>{{$category['ctitle']}}</h3>
          <p class="card-text">{!! $category['carticle'] !!}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-primary" href="{{url('shop/' . $category['curl'])}}">View Products</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection