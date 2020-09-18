<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/script/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    @yield('action')
    @csrf
  <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" class="form-control" name='password' id="exampleInputPassword1" required>
  <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
  </br>
   @yield('register')
</form>
</body>
</html>
