<?php 
   $id_berita=$_GET['id'];
   $query_berita1=mysqli_query($host1, "select * from tbl_berita where id_berita=$id_berita");
   $berita=mysqli_fetch_array($query_berita1);
?>
<!-- left column -->
<div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title">UBAH BERITA</h3>  
      </div>
      <!-- /.card-header -->
   <!-- form start -->
   <form role="form" action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
      <div class="card-body">
         <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" class="form-control" id="validationCustom03" name="judul" value="<?= $berita['judul_berita']?>" required>
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
                  <?php while($katagori=mysqli_fetch_array($query_katagori)){
                     if($berita['katagori_berita']==$katagori['id_katagori']){
                        echo '<option value="'.$katagori['id_katagori'].'" selected>'.$katagori['nama_katagori'].' </option>';
                     }else{
                        echo '<option value="'.$katagori['id_katagori'].'">'.$katagori['nama_katagori'].' </option>';
                     }
                  ?>
                  <?php } ?>
                  </select>
               </div>
            </div>
         <div class="col-md-4">
            <div class="form-group">
               <label>Tanggal Berita</label>
               <input type="date" class="form-control" id="validationCustom03" name="tgl" value="<?= $berita['tgl_berita']?>" required>
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
                     <input type="file" name="foto" class="custom-file-input" id="customFile">
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
            <textarea id="compose-textarea" name="isi" class="form-control" style="height: 500px" required>
               <?= $berita['isi_berita']?>
            </textarea>
         </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
         <button type="submit" name="ubah" onclick="return confirm('yakin ingin disimpan?');" class="btn btn-primary float-right">Simpan</button>
      </div>
   </form>
   </div>
   <!-- /.card -->
</div>
<!--/.col (left) -->
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   $h="";
   $hapus_gambar="";
   if(isset($_POST['ubah'])){
      $judul=addslashes($_POST['judul']);
      $katagori=addslashes($_POST['katagori']);
      $tgl=addslashes($_POST['tgl']);
      $isi=addslashes($_POST['isi']);
      $new_isi=strip_tags($isi);
      $file=$_FILES['foto']['name'];

      if($file==""){
         $file=$berita['gambar_berita'];
         $h=$file;
      }else{
      $sqlCommand = "SELECT COUNT(*) FROM tbl_berita";
      $urut=round(microtime(true));
      $file="img-".$urut.$file;
      }

      $format=pathinfo($file,PATHINFO_EXTENSION);
      if(($format== "jpg") or ($format== "png") or ($format== "JPG") or ($format== "PNG")or ($format== "jpeg")or ($format== "JPEG")){

      $masuk=mysqli_query($host1,"UPDATE tbl_berita SET judul_berita='$judul',tgl_berita='$tgl',gambar_berita='$file', isi_berita='$new_isi',katagori_berita='$katagori' where id_berita='$id_berita'");
      if($file==$h){
         echo"";
      }else{
         $lokasi=$berita['gambar_berita'];
         // alamat tempat gambar
         $hapus_gambar="../dist/img/berita/$lokasi";
         // script delete gambar dari folder
      }
      if($masuk){
      if($file !=$h){
         unlink($hapus_gambar);
         $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/berita/'.$file);
      }
         echo "<script>
         alert('Berita berhasil diubah');
         document.location.href='index.php?halaman=Ubah_berita&menu=Berita&id=$id_berita';
         </script>";
      }else{
         echo "<script>
         alert('Berita gagal diubah');
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