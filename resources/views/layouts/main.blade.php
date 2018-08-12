<!DOCTYPE html>
<html lang="en">

<head>
  @include('../partials.head')
</head>

<body class="fixed-left">
  <!-- Begin page -->
  <div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left"><i class="ion-close"></i></button>
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>--><a href="index.html" class="logo"><img src="{{ asset('public') }}/assets/images/logo.png" height="14" alt="logo"></a></div>
      </div>
      <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
          @include('../partials.sidebar')
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->
    <!-- Start right Content here -->
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <!-- Top Bar Start -->
        @include('../partials.topbar')
  <!-- Top Bar End -->
  <div class="page-content-wrapper">
    @yield('content')
    <!-- container -->
  </div>
  <!-- Page content Wrapper -->
  </div>
  <!-- content -->
  <footer class="footer">© 2018 Dashor by Themesdesign.</footer>
  </div>
  <!-- End Right content here -->
  </div>
  <!-- END wrapper -->
  <!-- jQuery  -->
  <script src="{{ asset('public') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('public') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('public') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ asset('public') }}/assets/js/modernizr.min.js"></script>
  <script src="{{ asset('public') }}/assets/js/detect.js"></script>
  <script src="{{ asset('public') }}/assets/js/fastclick.js"></script>
  <script src="{{ asset('public') }}/assets/js/jquery.slimscroll.js"></script>
  <script src="{{ asset('public') }}/assets/js/jquery.blockUI.js"></script>
  <script src="{{ asset('public') }}/assets/js/waves.js"></script>
  <script src="{{ asset('public') }}/assets/js/jquery.nicescroll.js"></script>
  <script src="{{ asset('public') }}/assets/js/jquery.scrollTo.min.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/metro/MetroJs.min.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/morris/morris.min.js"></script>
  <script src="{{ asset('public') }}/assets/plugins/raphael/raphael-min.js"></script>
  <script src="{{ asset('public') }}/assets/pages/dashboard.js"></script>
  <!-- App js -->
  <script src="{{ asset('public') }}/assets/js/app.js"></script>
</body>

</html>
