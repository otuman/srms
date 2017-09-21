<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SRMS') }} | @yield('title')</title>
    <link rel="icon" href="{{ asset('protected/storage/uploads/images/prod-1.jpg') }}">
      <!-- Bootstrap -->
    <link href="{{ asset('protected/resources/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('protected/resources/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('protected/resources/assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('protected/resources/assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('protected/resources/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('protected/resources/assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('protected/resources/assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('protected/resources/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css" rel="stylesheet">
    <link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('protected/resources/assets/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- Jerotoma Admin css -->
  <link href="{{ asset('/css/vimmak-admin.min.css') }}" rel="stylesheet">
     @yield('style-script')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
         <!-- Left Navigation-->
      <div class="col-md-3 left_col">
         @include('layouts.left-navigation')
     </div>
      <!-- Top Navigation-->
    <div class="top_nav navbar-fixed-top">
        <div class="nav_menu">
           @include('layouts.top-navigation')
        </div>
    </div>
     <!-- page content -->
     <div class="right_col" role="main">
         @yield('content')
     </div>
   </div>
 </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script>  -->
    <!-- jQuery -->
    <script src="{{ asset('protected/resources/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('protected/resources/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('protected/resources/assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('protected/resources/assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('protected/resources/assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('protected/resources/assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('protected/resources/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('protected/resources/assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('protected/resources/assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Datatables.js -->
    <script src="{{ asset('protected/resources/assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!--<script src="{{ asset('protected/resources/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script> -->
    <!--<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script> -->
    <!--<script src="{{ asset('protected/resources/assets/vendors/datatables.net/js/dataTables.editor.min.js') }}"></script> -->

    <!-- Flot -->
    <script src="{{ asset('protected/resources/assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('protected/resources/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('protected/resources/assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('protected/resources/assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('protected/resources/assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('protected/resources/assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('protected/resources/assets/build/js/custom.min.js') }}"></script>
     @yield('page-script')
</body>
</html>
