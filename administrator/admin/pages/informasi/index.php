<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card">
        <!-- <div class="card-header">
          <h3 class="card-title"><?= $menu ?></h3>
        </div> -->
        <!-- /.card-header -->
   <div class="row">
      <div class="col-6">
         <div class="btn btn-group">
         <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambah">
            Tambah
         </button>
         </div>
      </div>
   </div>
      <div class="card-body">
         <table id="example1" class="table table-bordered table-striped ">
         <thead>
            <tr>
               <th class="text-center">NO</th>
               <th class="text-center">SUB MENU</th>
               <th class="text-center">AKSI</th>
            </tr>
         </thead>
         <tbody>
         <?php
            include 'include/queryAdmin.php';
            $no='1';
               if(mysqli_num_rows($query_informasi)) {
               while($informasi=mysqli_fetch_array($query_informasi)){
         ?>
         <tr>
            <td class="text-center"><?= $no?></td>
            <td class="text-center"><a href="index.php?halaman=Edit_menu_informasi&id=<?= $informasi['id_informasi']?>&menu=Informasi&mn=<?= $informasi['submenu_informasi']?>" ><?= $informasi['submenu_informasi']?></a></td>
            <td class="text-center">
               <div class="btn-group">
                  <a href="pages/informasi/hapus.php?id=<?=$informasi['id_informasi']?>" type="button" class="btn btn-default btn-sm" onclick="return confirm('yakin?');"><i class="far fa-trash-alt"></i></a>
                  <a href="index.php?halaman=Ubah_menuinformasi&menu=Informasi&id=<?=$informasi['id_informasi']?>" type="button"  class="btn btn-default btn-sm"><i class="fas fa-edit"></i></a>
               </div>
            </td>
         </tr>
         <?php $no++; 
            }} ?>
         </tbody>
         </table>
      </div>
      <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<div class="modal fade" id="modal-tambah" >
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Tambah Submenu Informasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      <div class="modal-body">
         <form role="form" action="" method="post" class="needs-validation" novalidate> 
            <div class="card-body">
               <div class="form-group">
                  <label>Nama Submenu</label>
                  <input type="text" class="form-control" id="validationCustom03" name="submenu" required>
                  <div class="invalid-feedback">
                     menu harus diisi
                  </div>
               </div>
               <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
</div>
<!-- /.modal -->

<?php 
   if(isset($_POST['simpan'])){
      $submenu=strtoupper($_POST['submenu']);
      $masuk=mysqli_query($host1,"INSERT INTO tbl_informasi values (' ','$submenu',' ','gambar.jpg',' ')");

      if($masuk){
         echo "<script>
         alert('submenu berhasil disimpan');
         document.location.href='index.php?halaman=Informasi&menu=Informasi';
         </script>";
      }else{
         echo "<script>
         alert('submenu gagal disimpan, karakter harus huruf!');
         </script>";
      }
   }
?>
