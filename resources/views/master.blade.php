<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @include('inc.css_header')
  <script>
    var BASE_URL = "{{ url('') }}";
  </script>

  <title>
    @if( !empty($pageTitle)) {{$pageTitle}}@endif
  </title>
</head>

<body>
  <header class="mb-5">
    @include('inc.header')
  </header>
  <br>
  <main class="mt-5">
    @include('inc.main')
  </main>
  @include('inc.footer')
  @include('inc.scripts')
</body>

</html>