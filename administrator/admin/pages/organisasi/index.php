 <?php
   include 'include/queryAdmin.php';
 ?>

 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3">
         <!-- Profile Im age -->
            <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                  <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                     src="../dist/img/organisasi/<?= $organisasi['logo_organisasi'] ?>"
                     alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center"><?= $organisasi['nama_singkat_organisasi']; ?></h3>
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
                     <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Profil Organisasi</a></li> -->
                  </ul>
               </div><!-- /.card-header -->
               <div class="card-body">
                  <div class="tab-content">
                     <div class="active tab-pane" id="settings">
                        <form class="form-horizontal needs-validation" role="form" method="post" enctype="multipart/form-data" novalidate>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-10">
                                 <input type="text" name="nama_organisasi" class="form-control" id="validationCustom03" placeholder="Nama Organisasi" value="<?= $organisasi['nama_organisasi']; ?>" required>
                                 <div class="invalid-feedback">
                                 nama harus diisi
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                           <label for="inputName" class="col-sm-2 col-form-label">Nama Singkat</label>
                              <div class="col-sm-10">
                                 <input type="text" name="nama_singkat_organisasi" class="form-control" id="validationCustom03" placeholder="Singkat Organisasi" value="<?= $organisasi['nama_singkat_organisasi']; ?>" required>
                                    <div class="invalid-feedback">
                                    nama harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Kabupaten</label>
                              <div class="col-sm-10">
                                 <select class="form-control" name="kabupaten" id="kabupaten" required>
                                    <option value=""></option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Kecamatan</label>
                              <div class="col-sm-10">
                                 <select class="form-control" name="kecamatan" id="kecamatan" required>
                                    <option value=""> </option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                              <div class="col-sm-10">
                                 <input type="text" name="alamat" class="form-control" id="validationCustom03" placeholder="Email" value="<?= $organisasi['alamat']; ?>" required>
                                    <div class="invalid-feedback">
                                    alamat harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                 <input type="email" name="email" class="form-control" id="validationCustom03" placeholder="Email" value="<?= $organisasi['email_organisasi']; ?>" required>
                                    <div class="invalid-feedback">
                                    email harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Nomor Telepon</label>
                              <div class="col-sm-10">
                                 <input type="text" name="no_hp" class="form-control" id="validationCustom03" placeholder="Nomor Telepon" value="<?= $organisasi['no_hp_organisasi']; ?>" required>
                                    <div class="invalid-feedback">
                                    nomor telepon harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Lokasi</label>
                              <div class="col-sm-10">
                                 <textarea type="text" name="lokasi" class="form-control" id="validationCustom03" placeholder="Link Maps" required> <?= $organisasi['lokasi']; ?></textarea>
                                    <div class="invalid-feedback">
                                    lokasi harus diisi
                                    </div>
                              </div>
                           </div>
                           <div class="form-group row">
                           <label for="inputName" class="col-sm-2 col-form-label">Nama Kepala Sekolah</label>
                           <div class="col-sm-10">
                              <input type="text" name="nama_kepala" class="form-control" id="validationCustom03" placeholder="Nama Kepala Organisasi" value="<?= $organisasi['nama_kepala']; ?>" required>
                                 <div class="invalid-feedback">
                                 nama harus diisi
                                 </div>
                           </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Logo Organisasi</label>
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
                                 <button type="submit" onclick="return confirm('yakin ingin simpan?');" name="simpan" class="btn btn-primary float-right">Simpan</button>
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
      if(isset($_POST['simpan'])){
      $nama=addslashes(strtolower($_POST['nama_organisasi']));
      $nama_organisasi=ucwords($nama);
      $nama_singkat=addslashes(strtoupper($_POST['nama_singkat_organisasi']));
      $kecamatan=addslashes($_POST['kecamatan']);
      $alamat1=addslashes(strtolower($_POST['alamat']));
      $alamat=ucwords($alamat1);
      $email=addslashes($_POST['email']);
      $no_hp=addslashes($_POST['no_hp']);
      $lokasi_organisasi=addslashes($_POST['lokasi']);
      $kepala=addslashes(strtolower($_POST['nama_kepala']));
      $kepala_organisasi=ucwords($kepala);

      $file=$_FILES['foto']['name'];
      if($file==""){
         $file=$organisasi['logo_organisasi'];
         $h=$file;
      }else{
         $sqlCommand = "SELECT COUNT(*) FROM tbl_organisasi";
         $urut=round(microtime(true));
         $file="img-".$urut.$file;
      }
         $format=pathinfo($file,PATHINFO_EXTENSION);
      if(($format== "jpg") or ($format== "png") or ($format== "JPG") or ($format == "PNG") ){
         $masuk=mysqli_query($host1,"UPDATE tbl_organisasi SET nama_organisasi='$nama_organisasi',nama_singkat_organisasi='$nama_singkat', kecamatan='$kecamatan', alamat='$alamat', email_organisasi='$email', no_hp_organisasi='$no_hp', lokasi='$lokasi_organisasi', nama_kepala='$kepala_organisasi', logo_organisasi='$file'");
      if($file==$h){
         echo" ";
      }else{
         $lokasi=$organisasi['logo_organisasi'];
         // alamat tempat gambar
         $hapus_gambar="../dist/img/organisasi/$lokasi";
      }
      if($masuk){
         // script delete gambar dari folder
         unlink($hapus_gambar);
         $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/organisasi/'.$file);
         echo "<script>
         alert('data berhasil disimpan');
         document.location.href='index.php?halaman=Organisasi&menu=Organisasi';
         </script>";
      }else{
         echo "<script>
         alert('data gagal disimpan');
         document.location.href='index.php?halaman=Organisasi&menu=Organisasi';
         </script>";
      }
      }else{
         echo "<script>
         alert('data gagal disimpan Format Harus JPG/PNG');
         document.location.href='index.php?halaman=Organisasi&menu=Organisasi';
         </script>";
      }
   }
?>

