<section class="content">
   <div class="row">
      <div class="col-12">
         <div class="card card-primary">
            <!-- <div class="card-header">
               <h3 class="card-title">Banner & Vidio</h3>
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
                     <th>TEXT BANNER</th>
                     <th>TEXT VIDIO</th>
                     <th>GAMBAR</th>
                     <th>VIDEO</th>
                     <th>AKSI</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  include 'include/queryAdmin.php';
                  $no=1;
                  if(mysqli_num_rows($query_background)) {
                  while($background=mysqli_fetch_array($query_background)){ ?>
               <tr>
                  <td><?= $no?></td>
                  <td><?= $background['text1']?></td>
                  <td><?= $background['text2']?></td>
                  <td> <a target="blink" href="../dist/img/background/<?= $background['foto_background']?>"><img src="../dist/img/background/<?= $background['foto_background']?>" width="30" height="40"></a></td>
                  <td><?= $background['video_background']?></td>
                  <td class="text-center">
                     <div class="btn-group">
                        <a href="pages/background/hapus.php?id=<?=$background['id_background']?>" type="button" class="btn btn-default btn-sm" onclick="return confirm('yakin?');"><i class="far fa-trash-alt"></i></a>
                        <a href="index.php?halaman=Ubah_background&menu=Background&id=<?=$background['id_background']?>" type="button"  class="btn btn-default btn-sm"><i class="fas fa-edit"></i></a>
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
            <h4 class="modal-title">Tambah background</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form role="form" action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate> 
               <div class="card-body">
                  <div class="form-group">
                     <label>TEXT BANNER</label>
                     <input type="text" class="form-control" id="validationCustom03" name="text1" required>
                     <div class="invalid-feedback">
                        text banner harus diisi
                     </div>
                  </div>
                  <div class="form-group">
                     <label>TEXT VIDIO</label>
                     <input type="text" class="form-control" id="validationCustom03" name="text2" required>
                     <div class="invalid-feedback">
                        text vidio harus diisi
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-2 col-form-label">Foto</label>
                     <div class="col-sm-10">
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" name="foto" class="custom-file-input"  id="customFile validationCustom03" required>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                        <div class="input-group-append">
                           <span class="input-group-text">Upload</span>
                        </div>
                           <div class="invalid-feedback">
                              gambar harus diisi
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Video background</label>
                     <input type="text" class="form-control" placeholder="URL YOUTUBE" name="video">
                  </div>
               </div>
               <!-- /.card-body -->
         </div>
   <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
   </div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php 
   if(isset($_POST['tambah'])){
   $text1=addslashes($_POST['text1']);
   $text2=addslashes($_POST['text2']);
   $video=addslashes($_POST['video']);
   $file=$_FILES['foto']['name'];

      $sqlCommand = "SELECT COUNT(*) FROM tbl_background";

      $urut=round(microtime(true));
      $file="img-".$urut.$file;
      $format=pathinfo($file,PATHINFO_EXTENSION);
      if(($format== "jpg") or ($format== "png")or ($format== "JPG") or ($format== "PNG") or ($format== "jpeg") or ($format== "JPEG")){
      $masuk=mysqli_query($host1,"insert into tbl_background values (' ','$text1','$text2','$file','$video')");
      if($masuk){
         $cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/background/'.$file);
         echo "<script>
         alert('data berhasil ditambahkan');
         document.location.href='index.php?halaman=Background&menu=Background';
         </script>";
      }else{
         echo "<script>
         alert('data gagal disimpan');
         </script>";
      }
      }else{
         echo "<script>
            alert('Format Harus JPG/PNG');
            document.location.href='index.php?halaman=Background&menu=Background';
            </script>";
      }
   }
?>


