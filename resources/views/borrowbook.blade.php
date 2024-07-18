@include('layouts.header')
  <body>
  @include('layouts.navbar')
    <section class="countdown-list"></section>
    <script>
      const countdown = {!! json_encode($countdown) !!}
      const path = "{{  Storage::url('img/books/') }}"
    </script>
    @include('layouts.footer')