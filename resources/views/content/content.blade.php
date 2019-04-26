@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    @foreach($content as $contents)
    <div class="col-12">
      <h3>{{ $contents->title }}</h3>
      <p>{!! $contents->article !!}</p>
    </div>
    @endforeach
  </div>
</div>
@endsection