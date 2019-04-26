@extends('master')
@section('main_content')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>{{ $products[0]->ctitle}} products</h1>
    </div>
    <div class="dropdown col-3">

      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Order By:
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($products as $product)
        <a class="dropdown-item"
          href="{{ url('shop/sortBy/' . $product->categorie_name . '/' . 'price' . '/' . 'asc')  }}">Price
          Low to
          High (Asc)
          &nbsp; <i class="fas fa-sort-up"></i></a>
        <a class="dropdown-item"
          href="{{ url('shop/sortBy/' . $product->categorie_name . '/' . 'price' . '/' . 'desc') }}">Price
          High to
          Low (Desc)
          &nbsp;
          <i class="fas fa-sort-down"></i></a>
        @endforeach
      </div>

    </div>
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
  <div class="row mt-3">
    @foreach ($products as $product)
    <div class="col-md-4">
      <img height="200" src="{{asset('images/' . $product->pimage)}}" alt="{{$product->ptitle}} product image">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h3>{{$product->ptitle}}</h3>
          <p class="card-text">{!!$product->particle!!}</p>
          <p class="card-text"><b>On Sale:</b> ${{$product->price}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-primary" href="{{url('shop/' . $product->categorie_name . '/' . $product->purl)}}">More
                Details</a>
              @if(! Cart::get($product->id))
              <button data-id="{{ $product->id }}" class="add-to-cart-btn ml-3 btn btn-success" type="button"><i
                  class="fas fa-cart-plus"></i> + Add To Cart</button>
              @else
              <button disabled="disabled" class="add-to-cart-btn ml-3 btn btn-success" type="button"><i
                  class="fas fa-cart-plus"></i> Already In Cart</button>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach


  </div>
  <div class="row">
    <div class="col-12">
      {{ $products->links() }}
    </div>
  </div>
</div>
@endsection