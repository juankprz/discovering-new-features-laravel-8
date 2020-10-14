<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'Prueba ') | | AdminLte</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("admin-lte/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("admin-lte/dist/css/adminlte.min.css") }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include("adminlte/navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include("adminlte/aside")
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      @yield('breadcrumb')

    </section>

    @yield('news')

    <!-- Main content -->
    <section class="content">

      @yield('contenido')

    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @include("adminlte/footer")

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset("admin-lte/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("admin-lte/dist/js/adminlte.js") }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset("admin-lte/dist/js/demo.js") }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset("admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js") }}"></script>
<script src="{{ asset("admin-lte/plugins/raphael/raphael.min.js") }}"></script>
<script src="{{ asset("admin-lte/plugins/jquery-mapael/jquery.mapael.min.js") }}"></script>
<script src="{{ asset("admin-lte/plugins/jquery-mapael/maps/usa_states.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ asset("admin-lte/plugins/chart.js/Chart.min.js") }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset("admin-lte/dist/js/pages/dashboard2.js") }}"></script>
</body>
</html>
