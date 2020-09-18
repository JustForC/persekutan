<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style type="text/css">
    .box{
      width:100%;
      margin:0 auto;
    }
    </style>
    <script src="/script/jquery.js"></script>
    <script type="text/javascript" src="/script/googleapi.js"></script>
    @yield('script')
      <title>@yield('title')</title>
  </head>
  <body>
  
  <div class="container">
    <div class="row">
      <div class="dropdown mr-1 col-4-md">
      @yield('dropdown')
      </div>
    </div>  
    <br>
    <div class="row">
        @yield('content')
    </div>
    <div class=row>
        @yield('chart')
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>