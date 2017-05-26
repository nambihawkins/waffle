<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title> <!--change this title for each page-->
    <!-- Bootstrap -->
    @include('_head')
    <body>

        @include('_nav')

        <div class="pagecontainer">
          <body>
              <div class="container">
                
                @yield('content')
              </div>
        </div>

        @include('_footer')

        @include('_js')
    </body>
</html>
