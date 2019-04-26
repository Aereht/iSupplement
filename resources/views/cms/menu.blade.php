@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit The Site Navigation Bar Menu:</h1>
    <p class="mt-3"><a class="btn btn-primary" href="{{ url('cms/menu/create') }}"><i class="fas fa-plus-circle"></i>
        Add A Menu Link</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Link</th>
          <th>Updated At</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menu as $item)
        <tr>
          <td>{{ $item['link'] }}</td>
          <td>{{ date('d/m/Y - H:i:s', strtotime($item['updated_at'] )) }} - Last Updated
            By : {{ Session::get('user_name') }}</td>
          <td>
            <a class="mr-2" href="{{ url('cms/menu/' . $item['id'] . '/edit')  }}"><i class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{ url('cms/menu/' . $item['id'])  }}"><i class="fas fa-trash-alt"></i> Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection