<?php 
   $id_katagori=$_GET['id'];
   $query_katagori1=mysqli_query($host1, "SELECT * FROM tbl_katagori WHERE id_katagori=$id_katagori ");
   $katagori1=mysqli_fetch_array($query_katagori1);
?>

<!-- left column -->
<div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
      <div class="card-header">
         <a type="button" class="" href="index.php?halaman=Katagori&menu=Katagori"><i class="fas fa-angle-left"></i></a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="" method="post" class="needs-validation" novalidate>
         <div class="card-body">
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Katagori</label>
                     <input type="text" class="form-control" id="validationCustom03" value="<?= $katagori1['nama_katagori']?>" name="katagori" required>
                     <div class="invalid-feedback">
                        katagori harus diisi
                     </div>
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
      $nama_katagori1=addslashes(strtolower($_POST['katagori']));
      $nama_katagori=ucwords($nama_katagori1);

      $masuk=mysqli_query($host1,"UPDATE tbl_katagori SET nama_katagori='$nama_katagori'  WHERE id_katagori=$id_katagori");

      if($masuk){
         echo "<script>
         alert('katagori berhasil diubah');
         document.location.href='index.php?halaman=Ubah_katagori&menu=Katagori&id=$id_katagori';
         </script>";
      }else{
         echo "<script>
         alert('katagori gagal diubah');
         document.location.href='index.php?halaman=Ubah_katagori&menu=Katagori&id=$id_katagori';
         </script>";
      }
   }
?>