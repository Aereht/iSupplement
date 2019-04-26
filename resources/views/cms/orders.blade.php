@extends('cms.cms_master')
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">View Site Orders:</h1>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>User</th>
          <th>Total</th>
          <th>Details</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->total }}</td>
          <td>
            <ul>
              @foreach(unserialize($item->data) as $order)
              <li>{{ $order['name'] }}, Item Price: ${{$order['price']}}, Quantity: {{$order['quantity']}}</li>
              @endforeach
            </ul>
          </td>
          <td>{{ date('d/m/Y - H:i:s', strtotime($item->created_at )) }} - Last Updated
            By : {{ Session::get('user_name') }}</td>
          <td>
            <a class="mr-2" href="{{ url('cms/orders/' . $item->id . '/edit')  }}"><i class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{ url('cms/orders/' . $item->id)  }}"><i class="fas fa-trash-alt"></i> Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection