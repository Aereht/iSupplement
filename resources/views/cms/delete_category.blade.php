@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h3">Are you sure about deleting this category?</h1>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="{{ url('cms/categories/' . $item_id ) }}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <input type="hidden" name="_method" value="DELETE">
      <input type="submit" value="Delete" name="delete" class="btn btn-danger">
      <a class="btn btn-secondary" href="{{ url('cms/categories')  }}">Cancel</a>

    </form>
  </div>
</div>
@endsection