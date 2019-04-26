@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Checkout Page</h1>
      <p class="lead h2">Here is a summary of your cart:</p>
      @if($cart)
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Sub Total</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($cart as $item)
          <tr>
            <td>{{ $item['name'] }} </td>
            <td class="text-center">
              <a class="update-cart" href="{{ url('shop/update-cart?pid=' . $item['id'] . '&op=minus')  }}"><i
                  class="fas fa-minus-circle"></i></a>
              <input size="1" class="text-center" type="text" id="item-quantity" value="{{ $item['quantity'] }}">
              <a class="update-cart" href="{{ url('shop/update-cart?pid=' . $item['id'] . '&op=plus')  }}"><i
                  class="fas fa-plus"></i></a>
            </td>
            <td>${{ $item['price'] }} </td>
            <td>${{ $item['quantity'] * $item['price'] }} </td>
            <td class="text-center"><a class="text-danger" href="{{ url('shop/remove-item?pid=' . $item['id'] ) }}"><i
                  class="far fa-trash-alt"></i></a></td>
          </tr>
          @endforeach
        </tbody>

      </table>
      <p>
        <span><b>Total price :</b> ${{ Cart::getTotal() }}.</span>
        <span class="float-right">
          <a class="btn btn-secondary" href="{{ url('shop/clear-cart') }}">Clear Cart</a>
        </span>
      </p>
      <p>
        <a class="btn btn-primary" href="{{ url('shop/order')  }}">Order Now</a>
      </p>
      @else
      <p><i class="lead"> &nbsp; &nbsp;No items to show <br> &nbsp; &nbsp; &nbsp; The cart is empty...</i>
      </p>
      @endif
    </div>
  </div>
</div>
@endsection