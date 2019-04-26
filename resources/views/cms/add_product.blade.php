@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Add Product Form:</h1>
    <p><a class="btn btn-primary" href="{{ url('cms/products') }}"><i class="fas fa-arrow-left"></i> Back</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="{{ url('cms/products') }}" enctype="multipart/form-data" method="POST" autocomplete="off"
      novalidate="novalidate">
      @csrf
      <div class="form-group">
        <label for="categorie-id"><span class="text-danger">*</span> Add Product To:</label>
        <select class="form-control" name="categorie_id" id="categorie-id">
          <option value="">Choose category...</option>
          @foreach($categories as $item)
          <option @if( old('categorie_id')==$item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">
            {{$item['ctitle']}}</option>
          @endforeach
        </select>
        <span class="text-danger"> {{ $errors->first('categorie_id' )}}</span>
      </div>
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ old('title') }}" class="form-control origin-text" type="text" name="title" id="title">
        <span class="text-danger"> {{ $errors->first('title' )}}</span>
      </div>
      <div class="form-group">
        <label for="url"><span class="text-danger">*</span> URL:</label>
        <input value="{{ old('url') }}" class="form-control target-text" type="text" name="url" id="url">
        <span class="text-danger"> {{ $errors->first('url' )}}</span>
      </div>
      <div class="form-group">
        <label for="price"><span class="text-danger">*</span> Price:</label>
        <input value="{{ old('price') }}" class="form-control" type="price" name="price" id="price">
        <span class="text-danger"> {{ $errors->first('price' )}}</span>
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span> Article:</label>
        <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
        <span class="text-danger"> {{ $errors->first('article' )}}</span>
      </div>
      <div class="form-group">
        <label for="image">Product Image</label>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input name="image" type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <div class="form-group mt-4">
        <input name="submit" class="btn btn-primary btn-block" type="submit" value="Save">
      </div>

    </form>
  </div>
</div>
@endsection