<!-- left column -->
<div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title">TAMBAH BERITA</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
         <div class="card-body">
            <div class="form-group">
               <label>Judul Berita</label>
               <input type="text" class="form-control" id="validationCustom03" name="judul"  required>
               <div class="invalid-feedback">
                  judul harus diisi
               </div>
            </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Katagori Berita</label>
                        <select class="form-control" name="katagori" required>
                           <option value="">-pilih-</option>
                           <?php while($katagori=mysqli_fetch_array($query_katagori)){?>
                              <option value="<?= $katagori['id_katagori'] ?>"><?=$katagori['nama_katagori']?> </option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Tanggal Berita</label>
                        <input type="date" class="form-control" id="validationCustom03" name="tgl"  required>
                        <div class="invalid-feedback">
                           tanggal harus diisi
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Gambar Berita</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                                 <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                              </div>
                              <div class="input-group-append">
                                 <!-- <span class="input-group-text" >Upload</span> -->
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <textarea id="compose-textarea" name="isi" class="form-control" style="height: 500px" required></textarea>
               </div>
         </div>
         <!-- /.card-body -->
         <div class="card-footer">
            <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
         </div>
      </form>
   </div>
   <!-- /.card -->
</div>
<!--/.col (left) -->

<?php 
   if(isset($_POST['simpan'])){
      $judul=addslashes($_POST['judul']);
      $katagori=addslashes($_POST['katagori']);
      $tgl=addslashes($_POST['tgl']);
      $isi=addslashes($_POST['isi']);
      $new_isi=strip_tags($isi);
      $tgl_upload=date("d-m-Y H:i");
      $file=$_FILES['foto']['name'];
      $baca_berita=0;
      $daftar_hari = array(
      'Sunday' => 'Minggu',
      'Monday' => 'Senin',
      'Tuesday' => 'Selasa',
      'Wednesday' => 'Rabu',
      'Thursday' => 'Kamis',
      'Friday' => 'Jumat',
      'Saturday' => 'Sabtu'
      );
      
      $namahari = date('l', strtotime($tgl_upload));
      $sqlCommand = "SELECT COUNT(*) FROM tbl_berita";
      $urut=round(microtime(true));
      $file="img-".$urut.$file;
      $format=pathinfo($file,PATHINFO_EXTENSION);

      if(($format== "jpg") or ($format== "png") or ($format== "JPG") or ($format== "PNG")or ($format== "jpeg")or ($format== "JPEG")){
      $masuk=mysqli_query($host1,"INSERT INTO tbl_berita VALUES (' ','$judul', '$tgl','$daftar_hari[$namahari], $tgl_upload','$file','$new_isi','$katagori','$baca_berita')");

      if($masuk){
      $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/berita/'.$file);
      echo "<script>
      alert('Berita berhasil ditambahkan');
      document.location.href='index.php?halaman=Berita&menu=Berita';
      </script>";
      }else{
         echo "<script>
         alert(' gagal menambahkan berita!');
         </script>";
      }

      }else{
         echo "<script>
         alert('data gagal disimpan Format Harus JPG/PNG');
         document.location.href='index.php?halaman=Berita&menu=Berita';
         </script>";
      }
   }
?>
