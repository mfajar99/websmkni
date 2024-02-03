<?php 
   $id_berita=$_GET['id'];
   $query_berita1=mysqli_query($host1, "select *from tbl_berita where id_berita=$id_berita");
   $berita=mysqli_fetch_array($query_berita1);
?>

<div class="col-md-12">
   <div class="card card-primary card-outline">
      <div class="card-header">
      <a href="index.php?halaman=Berita&menu=Berita" ><i class="fas fa-chevron-left"></i></a>
         <div class="card-tools">
         </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
         <div class="mailbox-read-info">
            <h5><?= $berita['judul_berita'] ?></h5>
            <h6> <span class="mailbox-read-time float-right"> upload : <?= $berita['tgl_upload'] ?></span></h6>
         </div>
         <!-- /.mailbox-read-info -->
         <!-- /.mailbox-controls -->
         <div class="mailbox-read-message">
            <p> Tanggal Peristiwa : <?= $berita['tgl_berita'] ?></p>
               <img class="img-fluid" src="../dist/img/berita/<?= $berita['gambar_berita']?>" width="40%">
            <p><?=strip_tags($berita['isi_berita']);?></p>
         </div>
         <!-- /.mailbox-read-message -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
         <div class="float-right">
            <a type="submit" href="index.php?halaman=Ubah_berita&menu=Berita&id=<?=$berita['id_berita']?>" class="btn btn-primary float-right">Edit</a>
         </div>
         <a type="submit" href="pages/berita/hapus.php?id=<?=$berita['id_berita']?>" onclick="return confirm('yakin hapus?');" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
      </div>
      <!-- /.card-footer -->
   </div>
   <!-- /.card -->
</div>
<!-- /.col -->