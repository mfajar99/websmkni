<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adminitrator | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="dist/img/organisasi/favicon.ico">
</head>

<?php 
include 'koneksi.php';

   if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
         echo "
            <script>
            alert('Login gagal! username dan password salah!');
            </script>";
      }else if($_GET['pesan'] == "logout"){
         echo "<script>
         alert('Anda telah berhasil logout');
         </script>";
      }else if($_GET['pesan'] == "belum_login"){
         echo "<script>
         alert('Anda harus login untuk mengakses halaman admin');
         </script>";
      }
   }
?>

<body class="hold-transition login-page">
   <div class="login-box">
      <div class="login-logo">
         <img src="../administrator/dist/img/organisasi/logo-smkni-2.png" width="200" height="70">
      </div>
      <br>
      <!-- /.login-logo -->
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Login</p>
            <form action="cek_login.php" method="post" class="needs-validation" novalidate>
            <div class="input-group mb-3">
               <input type="email" class="form-control" id="validationCustom03" name="email_admin" placeholder="Email" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                  </div>
               </div>
               <div class="invalid-feedback">
                  email harus diisi
               </div>
            </div>
            <div class="input-group mb-3">
               <input type="password" class="form-control cek-password" id="validationCustom03" name="password_admin" placeholder="Password" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                  </div>
               </div>
               <div class="invalid-feedback">
                  password harus diisi
               </div>
            </div>
            <div class="row">
                  <div class="col-8">
                     <div class="icheck-primary">
                     <input type="checkbox" class="cek" id="remember">
                     <label for="remember">
                        lihat password
                     </label>
                     </div>
                  </div>
                  <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
               </div>
               <!-- /.col -->
            </div>
            </form>
            <!-- <p class="mb-1">
            <a href=" ">Saya Lupa Password</a>
            </p> -->
         </div>
         <!-- /.login-card-body -->
      </div>
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <scripts src="plugins/bootstrap/js/bootstrap.bundle.min.js"></scripts>
   <!-- AdminLTE App -->
   <script src="dist/js/adminlte.min.js"></script>
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
