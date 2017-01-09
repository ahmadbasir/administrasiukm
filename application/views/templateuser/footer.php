<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    Administrasi UKM
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?php echo base_url();?>asset/js/jquery.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
<!-- datatable -->
<script src="<?php echo base_url();?>asset/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/extensions/Buttons/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/extensions/Buttons/js/vfsfont.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/extensions/Buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>asset/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/js/app.min.js"></script>
<!-- Datepicker -->
<script src="<?php echo base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Jquery.confirm -->
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/jquery.confirm-master/jquery.confirm.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url()?>asset/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>asset/dist/js/demo.js"></script>
<!-- iCheck -->
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/iCheck/icheck.js"></script>

<script>
  $(document).ready(function() {
   $('.datepicker').datepicker({
    startDate: '-3d'
    });
});
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_square-red',
      radioClass: 'iradio_square-red'
    });
    $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green'
    });
     $('input[type="checkbox"].flat-aero, input[type="radio"].flat-aero').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue'
    });
  </script>

</body>
</html>