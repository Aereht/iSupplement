<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @include('inc.css_header')
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <title>iSupplement CMS Admin Panel</title>


</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ url('cms/dashboard') }}"><i class="fas fa-cookie-bite"></i>
      iSupplement Inc. &copy; &nbsp; CMS Panel</a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-white" target="_blank" href="{{ url('')  }}">Back To Site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('user/logout') }}">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/dashboard')  }}">
                <span>Dashboard - Home Page</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/menu')  }}">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/content')  }}">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/categories')  }}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/products')  }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/orders')  }}">Orders</a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('main_cms_content')
      </main>
    </div>
  </div>
  @include('inc.scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
  <script>
    $('#article').summernote({
      height: 300
    });
  </script>
</body>

</html>