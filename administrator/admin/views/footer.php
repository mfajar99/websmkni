   </div>
   <!-- /.content-wrapper -->
   <footer class="main-footer">
      <strong>Copyright &copy; SMKNI 2022
      <!-- <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.0.1
      </div> -->
   </footer>
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="../plugins/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
   $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- ChartJS -->
   <script src="../plugins/chart.js/Chart.min.js"></script>
   <!-- Sparkline -->
   <script src="../plugins/sparklines/sparkline.js"></script>
   <!-- JQVMap -->
   <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
   <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
   <!-- jQuery Knob Chart -->
   <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
   <!-- daterangepicker -->
   <script src="../plugins/moment/moment.min.js"></script>
   <script src="../plugins/daterangepicker/daterangepicker.js"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote -->
   <script src="../plugins/summernote/summernote-bs4.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- DataTables -->
   <script src="../plugins/datatables/jquery.dataTables.js"></script>
   <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
   <!-- AdminLTE App -->
   <script src="../dist/js/adminlte.js"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="../dist/js/pages/dashboard.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="../dist/js/demo.js"></script>
   <!-- bs-custom-file-input -->
   <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
      bsCustomFileInput.init();
      });
   </script>
   <!-- validasi -->
   <script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function() {
   'use strict';
   window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
         }
         form.classList.add('was-validated');
         }, false);
      });
   }, false);
   })();
   </script>

   <script>
   $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
      });
   });
   </script>
   <script>
   $(function () {
      //Add text editor
      $('#compose-textarea').summernote()
   })
   </script>

   <script type="text/javascript">
      $(document).ready(function(){
         $.ajax({
            type: 'POST',
            url: "include/get_kabupaten.php",
            cache: false, 
            success: function(msg){
               $("#kabupaten").html(msg);
            }
         });
         $.ajax({
            type: 'POST',
            url: "include/get_kecamatan2.php",
            cache: false, 
            success: function(msg){
            $("#kecamatan").html(msg);
            }
         });
         $("#kabupaten").change(function(){
         var kabupaten = $("#kabupaten").val();
            $.ajax({
               type: 'POST',
               url: "include/get_kecamatan.php",
               data: {kabupaten: kabupaten},
               cache: false,
               success: function(msg){
                  $("#kecamatan").html(msg);
               }
            });
         });
      });
   </script>
   <!-- lihat password -->
   <script type="text/javascript">
      $(document).ready(function(){		
         $('.cek').click(function(){
            if($(this).is(':checked')){
               $('.cek-password').attr('type','text');
            }else{
               $('.cek-password').attr('type','password');
            }
         });
      });
   </script>
</body>
</html>
