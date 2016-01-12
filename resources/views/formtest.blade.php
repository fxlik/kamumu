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
  <link rel="stylesheet" href="{{ asset('/datetimepicker/datepicker.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/datetimepicker/datepicker3.min.css') }}" type="text/css" />


  <!-- Custom styles for this template -->
  <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="{{ asset('/jquery/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('/datetimepicker/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
@stop

@section('content')

<input type="text" class="form-control" name="name" value="name">

@for ($i=0; $i < 2; $i++)
<input type="text" name="items[{{ $i }}]" value="{{ $i }}">
@endforeach

    <body>

    </body>
@stop
