<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
  integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
  integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/javascript.js')}}"></script>
@if(Session::has('sm'))
<script>
  @if (Session:: has('toastrpos'))
  toastr.options.positionClass = "{{ Session::get('toastrpos') }}";
  @else
  toastr.options.positionClass = "toast-top-full-width";
  @endif
  toastr.options.timeOut = 1300;
  toastr.options.fadeOut = 300;
  toastr.options.fadeIn = 300;
  toastr.success("{{ Session::get('sm') }}");
</script>

@endif