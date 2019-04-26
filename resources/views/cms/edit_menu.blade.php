@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Menu Form:</h1>
    <p><a class="btn btn-primary" href="{{ url('cms/menu') }}"><i class="fas fa-arrow-left"></i> Back</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="{{ url('cms/menu/' . $item['id']) }}" method="POST" autocomplete="off" novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{$item['id']}}">
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <label for="link"><span class="text-danger">*</span> Link:</label>
        <input value="{{ $item['link'] }}" class="form-control origin-text" type="text" name="link" id="link">
        <span class="text-danger"> {{ $errors->first('link' )}}</span>
      </div>

      <div class="form-group">
        <label for="url"><span class="text-danger">*</span> URL:</label>
        <input value="{{ $item['url'] }}" class="form-control target-text" type="text" name="url" id="url">
        <span class="text-danger"> {{ $errors->first('url' )}}</span>
      </div>

      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ $item['title'] }}" class="form-control" type="text" name="title" id="title">
        <span class="text-danger"> {{ $errors->first('title' )}}</span>
      </div>
      <div class="form-group mt-4">
        <input name="submit" class="btn btn-primary btn-block" type="submit" value="Update">
      </div>

    </form>
  </div>
</div>
@endsection