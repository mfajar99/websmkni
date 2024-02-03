<?php 
  $id=$_GET['id'];
  $ambil=mysqli_query($host1,"select *from tbl_profil where id_profil='$id'");
  $r=mysqli_fetch_array($ambil);
?>

<!-- left column -->
<div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
      <div class="card-header">
         <a type="button" class="" href="index.php?halaman=Profil&menu=Profil"><i class="fas fa-angle-left"></i></a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="" method="post" class="needs-validation" novalidate>
      <div class="card-body">
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label>Nama Submenu</label>
                  <input type="text" class="form-control"id="validationCustom03" name="submenu" value="<?= $r['submenu_profil']?>"  required>
                  <div class="invalid-feedback">
                     submenu harus diisi
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
   if(isset($_POST['ubah'])){
   $nama_menu=strtoupper($_POST['submenu']);
   $masuk=mysqli_query($host1,"UPDATE tbl_profil SET submenu_profil='$nama_menu' WHERE id_profil='$id'");
   
   if($masuk){
      echo "<script>
      alert('Nama Menu berhasil diubah');
      document.location.href='index.php?halaman=Ubah_menuProfil&menu=Profil&id=$id';
      </script>";
   }else{
      echo "<script>
      alert('Nama Menu gagal diubah');
      </script>";
      }
   }
?>