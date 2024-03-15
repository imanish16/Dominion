@include('inc.header')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('inc.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
        @include('inc.setting_panel')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
        @include('inc.sidebar')
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@include('inc.footer')
</body>

</html>

