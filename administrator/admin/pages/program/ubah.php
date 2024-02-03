<?php 
   $id=$_GET['id'];
   $ambil=mysqli_query($host1,"select *from tbl_program where id_program='$id'");
   $r=mysqli_fetch_array($ambil);
?>
<!-- left column -->
<div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
      <div class="card-header">
         <a type="button" class="" href="index.php?halaman=Program&menu=Program"><i class="fas fa-angle-left"></i></a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="" method="post" class="needs-validation" novalidate>
         <div class="card-body">
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Nama Submenu</label>
                     <input type="text" class="form-control"id="validationCustom03" name="submenu" value="<?= $r['submenu_program']?>"  required>
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
      $masuk=mysqli_query($host1,"UPDATE tbl_program SET submenu_program='$nama_menu' where id_program='$id'");
      if($masuk){
         echo "<script>
         alert('Nama Menu berhasil diubah');
         document.location.href='index.php?halaman=Ubah_menuprogram&menu=Program&id=$id';
         </script>";
      }else{
         echo "<script>
         alert('Nama Menu gagal diubah');
         </script>";
      }
   }
?>