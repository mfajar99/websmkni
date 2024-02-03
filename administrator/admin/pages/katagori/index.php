<section class="content">
   <div class="row">
      <div class="col-12">
         <div class="card card-primary">
            <!-- <div class="card-header">
               <h3 class="card-title">DATA <?= $menu ?></h3>
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
                  <th>NO</th>
                  <th>JENIS KATAGORI</th>
                  <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                     include 'include/queryAdmin.php';
                     $no=1;
                     if(mysqli_num_rows($query_katagori)) {
                     while($katagori=mysqli_fetch_array($query_katagori)){ ?>
                  <tr>
                  <td><?= $no?></td>
                  <td><?= $katagori['nama_katagori']?></td>
                  <td class="text-center">
                  <div class="btn-group">
                  <a href="pages/katagori/hapus.php?id=<?=$katagori['id_katagori']?>" type="button"  class="btn btn-default btn-sm" onclick="return confirm('yakin?');"><i class="fas fa-trash-alt"></i></a>

                  <a href="index.php?halaman=Ubah_katagori&menu=Katagori&id=<?=$katagori['id_katagori']?>" type="button"  class="btn btn-default btn-sm"><i class="fas fa-edit"></i></a>
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
            <h4 class="modal-title">Tambah Katagori</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
   <div class="modal-body">
      <form role="form" action="" method="post" class="needs-validation" novalidate> 
      <div class="card-body">
         <div class="row">
            <div class="col-sm-12">
               <div class="form-group">
                  <label>Katagori</label>
                  <input type="text" class="form-control" id="validationCustom03" name="katagori" required>
                  <div class="invalid-feedback">
                     katagori harus diisi
                  </div>
               </div>
            </div>
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
<!-- /.modal -->

<?php 
   $h="";
   if(isset($_POST['simpan'])){
      $nama_katagori1=addslashes(strtolower($_POST['katagori']));
      $nama_katagori=ucwords($nama_katagori1);
      $masuk=mysqli_query($host1,"insert into tbl_katagori values (' ','$nama_katagori')");
      if($masuk){
         echo "<script>
         alert('katagori berhasil ditambahkan');
         document.location.href='index.php?halaman=Katagori&menu=Katagori';
         </script>";
      }else{
         echo "<script>
         alert('katagori gagal ditambahkan');
         document.location.href='index.php?halaman=Katagori&menu=Katagori';
         </script>";
      }
   }
?>

