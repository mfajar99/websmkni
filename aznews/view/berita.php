<div class="header-mid d-none d-md-block" style="background-image: linear-gradient(#FDFDFE, #002E7E); padding-top: 30px;">
   <div class="container">
      <div class="row d-flex align-items-left">
         <h3 style="color: white; margin-bottom: 30px; margin-left: 15px;">DAFTAR BERITA</h3>
      </div>
   </div>
</div>
<section class="blog_area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mb-5 mb-lg-0">
            <!-- <h3 class="text-left">Daftar Berita</h3> -->
            <br>
               <div class="blog_left_sidebar">
                  <?php 
                     $cari_berita=$_GET['cari'];
                     $halaman = 4;
                     $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                     $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                     $result = mysqli_query($host1,"SELECT * FROM tbl_berita ORDER BY id_berita DESC");
                     $total = mysqli_num_rows($result);
                     $pages = ceil($total/$halaman);
                     if($cari_berita!=""){
                        $query = mysqli_query($host1,"SELECT * FROM tbl_berita WHERE judul_berita LIKE '%$cari_berita%' ORDER BY id_berita DESC LIMIT $mulai, $halaman");
                        echo '<div class="section-header text-center">Hasil Pencarian : '.$cari_berita.' </div>';
                     }else{
                        $query = mysqli_query($host1,"SELECT * FROM tbl_berita ORDER BY id_berita DESC LIMIT $mulai, $halaman");
                     }            
                     $no =$mulai+1;
                  ?> 
                  <?php
                     if(mysqli_num_rows($query)) {
                        while($berita=mysqli_fetch_array($query)){
                           $html = $berita['isi_berita'];
                  ?>
               <article class="blog_item">
                  <div class="blog_item_img">
                     <img class="card-img rounded-0" src="administrator/dist/img/berita/<?=$berita['gambar_berita']?>" alt="" width="100%">
                     <a href="index.php?menu=detail_berita&idmn=<?php echo $berita['id_berita'] ?>" class="blog_item_date">
                        <p><?= $berita['tgl_upload'];?></p>
                     </a>
                  </div>

                  <div class="blog_details">
                     <a class="d-inline-block" href="index.php?menu=detail_berita&idmn=<?php echo $berita['id_berita'] ?>">
                        <h2><?php echo $berita['judul_berita']?></h2>
                     </a>
                     <p><?= substr(strip_tags($html), 0, 50); echo "[...]"?></p>
                     <ul class="blog-info-link">
                        <li><a href="#"><i class="fa fa-calendar"></i>waktu: <?= $berita['tgl_berita'];?></a></li>
                        <li><a href="#"><i class="fa fa-eye"></i> <?= $berita['jumlah_baca'];?> dilihat</a></li>
                     </ul>
                  </div>
               </article>
               <?php }} ?>
               <nav class="blog-pagination justify-content-center d-flex">
                  <ul class="pagination">
                     <?php for ($i=1; $i<=$pages ; $i++){?>
                     <li class="page-item">
                        <a href="index.php?menu=berita&halaman=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                     </li>
                     <?php } ?>
                  </ul>
               </nav>
            </div>
         </div>
         <div class="col-lg-4">
            <?php include "aznews/view/widget.php" ?>
         </div>
      </div>
   </div>
</section>