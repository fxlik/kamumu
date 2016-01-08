@extends('layouts.main')

@section("head")
<head>
  <!-- style -->
  <link href="{{ asset('/style/abound.css') }}" rel="stylesheet" type="text/css" />
  <!-- bootstrap style css -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
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
      <div class="row-fluid">
        <div class="col-md-3">
          <div class="sidebar-nav">
            <ul id="yw2">
              <li class="">
                <a href="login">
                  Log in
                  <span class="label label-info pull-right"></span>
                </a>
              </li>
            </ul>
          </div>
          <br><br>
          <div class="well">
            <h3>Profil Alumni</h3>
            <p class="hello1">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              <br><br>
            </p>
            <p class="big-sis">
              <a href="tentang">Selengkapnya....</a>
            </p>
            <p></p>
          </div>

          <div class="well">
            <h3>Contact</h3>
            <p class="hello1">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <br><br>
            </p>
            <p></p>
          </div>

        </div>
        <div class="col-md-9">
          <h3>Alumni?</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br>
            <br>
          </p>
          <h3>Tujuan Kami</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          </p>
        </div>
      </div>
    <!-- </div> -->
  </section>
</body>
@stop
