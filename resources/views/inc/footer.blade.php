  <!-- plugins:js -->
  <script src="{{ asset('theme/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('theme/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('theme/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('theme/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('theme/js/off-canvas.js') }}"></script>
  <script src="{{ asset('theme/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('theme/js/template.js') }}"></script>
  <script src="{{ asset('theme/js/settings.js') }}"></script>
  <script src="{{ asset('theme/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('theme/js/dashboard.js') }}"></script>
  <script src="{{ asset('theme/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ asset('js/customDt.js') }}"></script>
  <script src="{{ asset('js/common.js') }}"></script>
  <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>

  <script src="{{ asset('assets/jquery/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/jquery/additional-methods.min.js') }}"></script>
  <!-- End custom js for this page-->
  @stack('custom-js')
