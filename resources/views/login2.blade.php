@extends('layouts.main')

@section('head')

<head>
  <meta charset="utf-8">
  <title>login..</title>
  <link href="{{ asset('/style/css/signin.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/style/css/parsley.css') }}" rel="stylesheet" type="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <!-- style -->
  <link href="{{ asset('/style/abound.css') }}" rel="stylesheet" type="text/css" />
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="{{ asset('/jquery/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
</head>
@stop

@section('content')
  <body>
    <section class="main-body">
      <!-- <div class="container-fluid"> -->
        <div id="content">
          <div class="page-header">
            <h1><strong>Alumni</strong> <small>Login</small></h1>
          </div>

          <div class="row-fluid">
            <div class="col-md-4"></div>

            <div class="col-md-4">
              <div class="span6 offset3">
                <div class="panel panel-default" style="width:400px ">
                  <div class="panel-heading"><strong>Login Alumni</strong></div>
                  <div class="panel-body">
                    <form action="/auth/login" class="form-signin">
                    {!! csrf_field() !!}
                    <label for="inputEmail" class="sr-only">Email address</label>
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                    <div class="checkbox">
                        <label>
                            <label><input type="checkbox" value="1">Tetap login</label>
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p><a href="#">Lupa password?</a></p>

                    <p class="or-social">Atau masuk dengan:</p>

                    <a href="/auth/facebook" class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
                    <a href="/auth/google" class="btn btn-lg btn-danger btn-block google"  type="submit">Google+</a>
                    <p> <a href="register">Belum terdaftar? Registrasi</a></p>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      <!-- </div> -->
    </section>

  </body>
@stop
