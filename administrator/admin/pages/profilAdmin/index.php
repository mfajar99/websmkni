 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                  <div class="text-center">
                     <img class="profile-user-img img-fluid img-circle"
                     src="../dist/img/admin/<?= $admin['foto_admin'] ?>"
                     alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center"><?= $admin['nama_admin']; ?></h3>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /.col -->
         <div class="col-md-9">
            <div class="card">
               <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                  </ul>
               </div><!-- /.card-header -->
               <div class="card-body">
                  <div class="tab-content">
                     <div class="active tab-pane" id="settings">
                        <form class="form-horizontal needs-validation" role="form" method="post" enctype="multipart/form-data" novalidate>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-10">
                                 <input type="text" name="nama" class="form-control" id="validationCustom03" placeholder="Nama" value="<?= $admin['nama_admin']; ?>" required>
                                    <div class="invalid-feedback">
                                    nama harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                 <input type="email" name="email" class="form-control" id="validationCustom03" placeholder="Email" value="<?= $admin['username_admin']; ?>" required>
                                    <div class="invalid-feedback">
                                    email harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                 <input type="password" name="password" class="form-control cek-password" id="validationCustom03" placeholder="Password" value="<?= $admin['password_admin']; ?>" required>
                                    <div class="invalid-feedback">
                                    password harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName2" class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                 <div class="icheck-primary">
                                    <input type="checkbox" class="cek" id="remember">
                                    <label for="remember">
                                       lihat password
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto</label>
                              <div class="col-sm-10">
                                 <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" name="foto" class="custom-file-input" id="customFile">
                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                       <!-- <span class="input-group-text" >Upload</span> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                 <button type="submit" onclick="return confirm('yakin ingin simpan?');" name="simpan" class="btn btn-primary">Simpan</button>
                                 <a type="button" onclick="return confirm('yakin ingin logout?');" href=" ../logout.php" class="btn btn-danger float-right">Logout</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
               </div><!-- /.card-body -->
            </div>
         <!-- /.nav-tabs-custom -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php  
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   $h="";
   $hapus_gambar="";
   if(isset($_POST['simpan'])){
      $nama=addslashes($_POST['nama']);
      $email=addslashes($_POST['email']);
      $password=addslashes($_POST['password']);
      $file=$_FILES['foto']['name'];
   if($file==""){
      $file=$admin['foto_admin'];
      $h=$file;
   }else{
      $sqlCommand = "SELECT COUNT(*) FROM tbl_admin";
      $urut=round(microtime(true));
      $file="img-".$urut.$file;
   }
      $format=pathinfo($file,PATHINFO_EXTENSION);
   if(($format== "jpg") or ($format== "png") or ($format== "JPG") or ($format== "PNG")){
      $masuk=mysqli_query($host1,"UPDATE tbl_admin SET nama_admin='$nama', username_admin='$email', password_admin='$password',foto_admin='$file' where id_admin=$_SESSION[id_admin]");
      if($file==$h){
         echo"";
      }else{
         $lokasi=$admin['foto_admin'];
         // alamat tempat gambar
         $hapus_gambar="../dist/img/admin/$lokasi";
         // script delete gambar dari folder
         unlink($hapus_gambar);
         }
      if($masuk){
         $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/admin/'.$file);
         echo "<script>
         alert('data berhasil disimpan');
         document.location.href='index.php?halaman=Admin&menu=Admin';
         </script>";
      }else{
         echo "<script>
         alert('data gagal disimpan');
         document.location.href='index.php?halaman=Admin&menu=Admin';
         </script>";
      }
      }else{
         echo "<script>
         alert('data gagal disimpan Format Harus JPG/PNG');
         document.location.href='index.php?halaman=Admin&menu=Admin';
         </script>";
      }
   }
?>
