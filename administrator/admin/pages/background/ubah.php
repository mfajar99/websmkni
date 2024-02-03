<?php 
   $id_background=$_GET['id'];
   $query_background1=mysqli_query($host1, "select *from tbl_background where id_background=$id_background ");
   $background=mysqli_fetch_array($query_background1);
?>
<!-- left column -->
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
      <div class="card-header">
      <a type="button" class="" href="index.php?halaman=Background&menu=Background Home"><i class="fas fa-angle-left"></i></a>
      </div>
      <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <input type="hidden"  class="form-control" name="iddesa" value="<?= $desa['id_desa']?>">
      <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
               <label>TEXT 1</label>
               <input type="text" class="form-control" id="validationCustom03" name="text1" value="<?= $background['text1']?>" required>
               <div class="invalid-feedback">
                  text 1 harus diisi
               </div>
            </div>
               <div class="form-group">
                  <label>TEXT 2</label>
                  <input type="text" class="form-control" id="validationCustom03" name="text2" value="<?= $background['text2']?>" required>
                  <div class="invalid-feedback">
                     text 2 harus diisi
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label>GAMBAR BACKGROUND</label>
                  <div class="input-group">
                     <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input"  >
                        <label class="custom-file-label" for="customFile">Choose file</label>
                     </div>
                     <div class="input-group-append">
                        <span class="input-group-text" >Upload</span>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>Video background</label>
                  <input type="text" class="form-control" placeholder="URL YOUTUBE" name="video" value="<?= $background['video_background']?>">
               </div>
            </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" name="ubah" class="btn btn-primary float-right">Simpan</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>
<!--/.col (left) -->
<?php 
   $h="";
   if(isset($_POST['ubah'])){
      $text1=addslashes($_POST['text1']);
      $text2=addslashes($_POST['text2']);
      $video=addslashes($_POST['video']);
      $file=$_FILES['foto']['name'];
      if($file==""){
         $file=$background['foto_background'];
         $h=$file;
      }else{
      $sqlCommand = "SELECT COUNT(*) FROM tbl_background";
      $urut=round(microtime(true));
      $file="img-".$urut.$file;
   }

   $masuk=mysqli_query($host1,"UPDATE tbl_background SET text1='$text1',text2='$text2',video_background='$video',foto_background='$file' where id_background=$id_background");
   if($file==$h){
      echo"";
      }else{
         $lokasi=$background['foto_background'];
         // alamat tempat gambar
         $hapus_gambar="../dist/img/background/$lokasi";
         // script delete gambar dari folder
         unlink($hapus_gambar);
      }
      if($masuk){
         $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/background/'.$file);
         echo "<script>
         alert('data berhasil disimpan');
         document.location.href='index.php?halaman=Background&menu=Background';
         </script>";
      }else{
         echo "ubah gagal";
      }
   }
?>