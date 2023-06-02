    <footer class="main-footer border-0 shadow-0" style="background-color: #f4f6f9">
      <strong
        >Copyright &copy; <?php date("Y") ?> <a href="https://github.com/EduardoSLuz">ESL</a>,
        Ltd.</strong
      >
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>V</b> 1.0</div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    
    </div>
    <!-- ./wrapper --> 

    <!-- modals -->
    <?php $this->load->view('templates/modals') ?>
    <!-- /.modals -->

    <!-- Bootstrap 4 -->
    <!-- <script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- jQuery -->
    <script src="<?php echo base_url('public/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('public/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);      
    </script>
    <!-- Bootstrap 5.2 -->
    <script src="<?php echo base_url('public/plugins/bootstrap5.3/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('public/plugins/chart.js/Chart.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('public/plugins/sparklines/sparkline.js') ?>"></script>
    <!-- JQVMap -->
    <!-- <script src="/public/plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('public/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('public/plugins/moment/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('public/plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url('public/plugins/select2/js/select2.full.min.js') ?>"></script>
    <script>
      $(document).ready(function () {
        $(".select2").select2();
      });
    </script>
    <!-- Summernote -->
    <script src="<?php echo base_url('public/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('public/plugins/adminLTE/js/adminlte.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/plugins/adminLTE/js/demo.js') ?>"></script>

    <!-- Page Loading -->
    <script src="<?php echo base_url('public/js/utils/page-loading.js') ?>"></script>
    <script src="<?php echo base_url('public/js/requests.js') ?>"></script>
    <script src="<?php echo base_url('public/js/modals.js') ?>"></script>

  </body>
</html>
