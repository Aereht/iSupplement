@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit The Shop Products:</h1>
    <p class="mt-3"><a class="btn btn-primary" href="{{ url('cms/products/create') }}"><i
          class="fas fa-plus-circle"></i>
        Add Product</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Product Image</th>
          <th>Updated At</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $item)
        <tr>
          <td>{{ $item['ptitle'] }}</td>
          <td><img width="60" src="{{ asset('images/' . $item['pimage']) }}" alt=""></td>
          <td> {{ date('d/m/Y - H:i:s', strtotime($item['updated_at'] )) }} - Last Updated
            By : {{ Session::get('user_name') }}</td>
          <td>
            <a class="mr-2" href="{{ url('cms/products/' . $item['id'] . '/edit')  }}"><i class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{ url('cms/products/' . $item['id'])  }}"><i class="fas fa-trash-alt"></i>
              Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection