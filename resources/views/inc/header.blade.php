<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><i class="fas fa-cookie-bite"></i> iSupplement</a>
    <a href="{{ url('shop/checkout') }}">
      <span class="text-white">
        <i class="fas fa-shopping-cart"></i>
        <div class="total-cart">
          @if( ! Cart::isEmpty() )
          {{ Cart::getTotalQuantity() }}
          @endif
        </div>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active ">
          <a class="nav-link" href="{{url('shop')}}">Shop </a>
        </li>
        @foreach($menu as $item)
        <li class="nav-item active">
          <a class="nav-link" href="{{url($item['url'])}}">{{ $item['link'] }} </a>
        </li>
        @endforeach
      </ul>
      <ul class="navbar-nav ml-auto">
        @if(!Session::has('user_id') )
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('user/signin') }}"><i class="fas fa-sign-in-alt"></i> SignIn </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{ url('user/signup') }}"><i class="fas fa-user-plus"></i> SignUp </a>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('user/profile') }}"><i class="far fa-user"></i> &nbsp;
            {{ Session::get('user_name') }}</a>
        </li>
        @if(Session::has('is_admin'))
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('cms/dashboard') }}"><i class="fas fa-crown"></i> Admin CMS Panel
          </a>
        </li>
        @endif
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('user/logout') }}"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>