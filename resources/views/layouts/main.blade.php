
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Alumni TI Untan</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" />

    <!-- jQuery -->
    <script src="{{ asset('/jQuery/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
	    <!-- bootstrap js--->
	  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <title>Alumni Teknik Informatika Untan</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('head')

</head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ALUMNI TI UNTAN</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="alumni">Alumni</a></li>
                <li><a href="#">Memory</a></li>
                <li><a href="event">Event</a></li>
                <li><a href="tentang">Tentang</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                <li><a href="login">
                <span class="glyphicon glyphicon-user"></span>
                login
                </a></li>
                @else
                <li><a href="#">{{ Auth::user()->Nama }}</a></li>
                <li><a href="#">Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">

    @yield('content')

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('/assets/js/ie10-viewport-bug-workaround.js') }}" type="text/javascript"></script>

@yield('footer')

</body>
</html>
