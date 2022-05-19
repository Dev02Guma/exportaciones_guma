<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title','IMPORTACIONES - GUMA')</title>
  <!-- Charts Morris -->
  <link rel="stylesheet" href="{{ asset('plugins/chart-morris/css/morris.css') }}">

  <!--Invoice CSS -->
  <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">

  <!-- datarangepicker -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">

  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('plugins/animation/css/animate.min.css') }}">

  <!-- vendor css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">

  <!-- datatable CSS -->
  <!--<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">-->
  <!--<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">-->

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- fontawesome icon -->
  <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}">

  <!-- CSS Datatimepicker -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">

  <style>
    a {
      text-decoration: none !important;
      /*color: #000;*/
    }

    .circulo {
      height: 10px !important;
      width: 10px !important;
      background: #dc3545 !important;
      -moz-border-radius: 50px !important;
      -webkit-border-radius: 50px !important;
      border-radius: 50% !important;
    }
  </style>
  <!-- Style CSS -->
  @yield("styles")
</head>

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="post">
    @csrf
  </form>
  <!-- [ Pre-loader ] end -->

  <!-- [ navigation menu ] start -->
  <!-- @include('layouts.menu') -->
  <!-- [ navigation menu ] end -->
  @include('layouts.navbar')

  <!-- [ Header ] start -->
  <!-- @include('layouts.header') -->
  <!-- [ Header ] end -->

  <!-- [ Content ] start -->
  @yield('content')
  <!-- [ Content ] end -->

  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('js/pcoded.min.js') }}"></script>
  <script src="{{ asset('js/daterangepicker.js') }}"></script>
  <script src="{{ asset('js/js_general.js') }}"></script>
  <script src="{{ asset('js/moment.js') }}"></script>

  <script src="{{ asset('js/daterangepicker.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>


  <!-- JS PLUGINS -->
  @yield('scriptsPlugins')
  @yield('metodosjs')
</body>

</html>