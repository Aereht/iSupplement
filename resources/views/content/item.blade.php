@extends('master')
@section('main_content')

<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>{{ $product['ptitle'] }}</h1> <br>
    </div>
    <div class="col-6">
      <div class="dropdown col-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Categories:
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach ($categories as $category)
          <a class="dropdown-item" href="{{ url('shop/' . $category['ctitle'] )  }}">{{$category['ctitle']}}</a>
          @endforeach
        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p><img width="200" src="{{asset('images/' . $product['pimage'])}}" alt="{{$product['ptitle']}} product image">
      </p>
      <p>{!! $product['particle'] !!}</p>
      <p><b>Price: </b>$ {{ $product['price'] }}</p>
      <p>
        @if(! Cart::get($product['id']))
        <button data-id="{{ $product['id'] }}" class="add-to-cart-btn ml-3 btn btn-success" type="button"><i
            class="fas fa-cart-plus"></i> + Add To
          Cart</button>
        @else
        <button disabled="disabled" class="add-to-cart-btn ml-3 btn btn-success" type="button"><i
            class="fas fa-cart-plus"></i> + Add To
          Cart</button>
        @endif
        <a class="btn btn-primary" href="{{ url('shop/checkout') }}">Checkout</a>
      </p>
    </div>
  </div>
</div>
@endsection