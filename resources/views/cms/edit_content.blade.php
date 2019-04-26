@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Content Form:</h1>
    <p><a class="btn btn-primary" href="{{ url('cms/content') }}"><i class="fas fa-arrow-left"></i> Back</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="{{ url('cms/content/' . $item['id']) }}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <label for="menu-id"><span class="text-danger">*</span> Add Content To:</label>
        <select class="form-control" name="menu_id" id="menu-id">
          @foreach($menu as $row)
          <option @if( $item['menu_id']==$row['id'] ) selected="selected" @endif value="{{ $row['id'] }}">
            {{$row['link']}}</option>
          @endforeach
        </select>
        <span class="text-danger"> {{ $errors->first('menu_id' )}}</span>
      </div>
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ $item['title'] }}" class="form-control" type="text" name="title" id="title">
        <span class="text-danger"> {{ $errors->first('title' )}}</span>
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span> Article:</label>
        <textarea name="article" id="article" class="form-control">{{ $item['article'] }}</textarea>
        <span class="text-danger"> {{ $errors->first('article' )}}</span>

      </div>
      <div class="form-group mt-4">
        <input name="submit" class="btn btn-primary btn-block" type="submit" value="Update">
      </div>

    </form>
  </div>
</div>
@endsection