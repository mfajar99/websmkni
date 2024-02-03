<section class="content">
   <div class="row">
      <div class="col-12">
         <div class="card card-primary">
            <!-- <div class="card-header">
            <h3 class="card-title">DATA BERITA</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="row">
               <div class="col-6">
                  <div class="btn btn-group">
                     <a href="index.php?halaman=Tambah_berita&menu=Berita" type="button" class="btn-sm btn-primary">
                        Tambah Berita
                     </a>
                  </div>
               </div>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped ">
               <thead>
               <tr>
                  <th>NO</th>
                  <th>JUDUL BERITA</th>
                  <th>TANGGAL BERITA</th>
                  <th>TANGGAL UPLOAD</th>
                  <th>GAMBAR</th>
                  <th>JUMLAH BACA</th>
                  <th>AKSI</th>
               </tr>
               </thead>
               <tbody>
               <?php
                  include 'include/queryAdmin.php';
                  $no=1;
                  if(mysqli_num_rows($query_berita)) {
                  while($berita=mysqli_fetch_array($query_berita)){ ?>
               <tr>
                  <td><?= $no?></td>
                  <td><?= $berita['judul_berita']?></td>
                  <td><?= $berita['tgl_berita']?></td>
                  <td><?= $berita['tgl_upload']?></td>
                  <td><a target="blink" href="../dist/img/berita/<?= $berita['gambar_berita']?>"><img class="img-fluid" src="../dist/img/berita/<?= $berita['gambar_berita']?>" width="50"> </a></td>
                  <td><?= $berita['jumlah_baca']?></td>
                  <td class="text-center">
                  <div class="btn-group">
                  <a href="pages/berita/hapus.php?id=<?=$berita['id_berita']?>" type="button"  class="btn btn-default btn-sm" onclick="return confirm('yakin?');"><i class="fas fa-trash-alt"></i></a>
                  <a href="index.php?halaman=Ubah_berita&menu=Berita&id=<?=$berita['id_berita']?>" type="button"  class="btn btn-default btn-sm"><i class="fas fa-edit"></i></a>
                  <a type="button" href="index.php?halaman=Detail_berita&menu=Berita&id=<?=$berita['id_berita']?>" class="btn btn-default btn-sm"><i class="far fa-eye"></i></a>
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