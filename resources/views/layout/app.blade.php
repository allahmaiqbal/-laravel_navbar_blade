<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partial.head')
  </head>    

  <body>
    @include('partial.navigation')

    <div class="container">
        @yield('content')
    </div>

    @include('partial.footer')
  </body>
</html>
