@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Product Form:</h1>
    <p><a class="btn btn-primary" href="{{ url('cms/products') }}"><i class="fas fa-arrow-left"></i> Back</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="{{ url('cms/products/' . $item['id']) }}" enctype="multipart/form-data" method="POST"
      autocomplete="off" novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{$item['id']}}">
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <label for="categorie-id"><span class="text-danger">*</span> Add Product To:</label>
        <select class="form-control" name="categorie_id" id="categorie-id">
          <option value="">Choose category...</option>
          @foreach($categories as $row)
          <option @if( $item['categorie_id']==$row['id'] ) selected="selected" @endif value="{{ $row['id'] }}">
            {{$row['ctitle']}}</option>
          @endforeach
        </select>
        <span class="text-danger"> {{ $errors->first('categorie_id' )}}</span>
      </div>
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ $item['ptitle'] }}" class="form-control origin-text" type="text" name="title" id="title">
        <span class="text-danger"> {{ $errors->first('title' )}}</span>
      </div>
      <div class="form-group">
        <label for="url"><span class="text-danger">*</span> URL:</label>
        <input value="{{ $item['purl'] }}" class="form-control target-text" type="text" name="url" id="url">
        <span class="text-danger"> {{ $errors->first('url' )}}</span>
      </div>
      <div class="form-group">
        <label for="price"><span class="text-danger">*</span> Price:</label>
        <input value="{{ $item['price'] }}" class="form-control" type="price" name="price" id="price">
        <span class="text-danger"> {{ $errors->first('price' )}}</span>
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span> Article:</label>
        <textarea name="article" id="article" class="form-control">{{ $item['particle'] }}</textarea>
        <span class="text-danger"> {{ $errors->first('article' )}}</span>
      </div>
      <div class="form-group">
        <label for="image">Change Product Image</label>
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
        <input name="submit" class="btn btn-primary btn-block" type="submit" value="Update">
      </div>

    </form>
  </div>
</div>
@endsection