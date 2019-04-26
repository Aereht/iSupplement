@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit The Navigation Bar Menus Content:</h1>
    <p class="mt-3"><a class="btn btn-primary" href="{{ url('cms/content/create') }}"><i class="fas fa-plus-circle"></i>
        Add Content</a></p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Updated At</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contents as $item)
        <tr>
          <td>{{ $item['title'] }}</td>
          <td>{{ date('d/m/Y - H:i:s', strtotime($item['updated_at'] )) }}</td>
          <td>
            <a class="mr-2" href="{{ url('cms/content/' . $item['id'] . '/edit')  }}"><i class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{ url('cms/content/' . $item['id'])  }}"><i class="fas fa-trash-alt"></i> Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection