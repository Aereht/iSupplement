@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit The Shop Categories:</h1>
    <p class="mt-3"><a class="btn btn-primary" href="{{ url('cms/categories/create') }}"><i
          class="fas fa-plus-circle"></i>
        Add A Category</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Category Image</th>
          <th>Updated At</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $item)
        <tr>
          <td>{{ $item['ctitle'] }}</td>
          <td><img width="60" src="{{ asset('images/' . $item['cimage']) }}" alt=""></td>
          <td> {{ date('d/m/Y - H:i:s', strtotime($item['updated_at'] )) }} - Last Updated
            By : {{ Session::get('user_name') }}</td>
          <td>
            <a class="mr-2" href="{{ url('cms/categories/' . $item['id'] . '/edit')  }}"><i
                class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{ url('cms/categories/' . $item['id'])  }}"><i class="fas fa-trash-alt"></i>
              Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection