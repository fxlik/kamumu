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
<div class="container">
  <div class="page-header">
      <h1 id="timeline"><strong>Event </strong><small>Alumni</small></h1>
  </div>
  <ul class="timeline">
      <li>
        <div class="timeline-badge"><i class="glyphicon glyphicon-glass"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11:00 pm  </small><small><i class="glyphicon glyphicon-home"></i> Lab A </small></p>
          </div>
          <div class="timeline-body">
            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge warning"><i class="glyphicon glyphicon-glass"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
          </div>
          <div class="timeline-body">
            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge success"><i class="glyphicon glyphicon-glass"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
          </div>
          <div class="timeline-body">
            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          </div>
        </div>
      </li>
  </ul>
</div>
@stop
