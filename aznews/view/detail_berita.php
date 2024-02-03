<?php 
   $lihat_berita=$detail_berita['jumlah_baca'];
   $jumlah_baca=$lihat_berita+1;
   $id_berita=$idmn;
   $baca=mysqli_query($host1,"UPDATE tbl_berita SET jumlah_baca='$jumlah_baca' where id_berita='$id_berita'");
?>
<div class="header-mid d-none d-md-block" style="background-image: linear-gradient(#FDFDFE, #002E7E); padding-top: 30px;">
   <div class="container">
      <div class="row d-flex align-items-left">
         <h3 style="color: white; text-align: center; margin-bottom: 30px; margin-left: 15px;">DETAIL BERITA</h3>
      </div>
   </div>
</div>
<section class="blog_area single-post-area">
   <div class="container">
   <!-- Hot Aimated News Tittle-->
      <div class="row">
         <div class="col-lg-12">
            <div class="trending-tittle">
               
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
                  <h2 class="text-center"><?= $detail_berita['judul_berita'];?></h2>
               <div class="feature-img">
                  <img class="img-fluid" src="administrator/dist/img/berita/<?=$detail_berita['gambar_berita']?>" alt="" width="100%">
               </div>
               <div class="blog_details " >
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a ><i class="fa fa-calendar"></i>upload : <?= $detail_berita['tgl_upload'];?></a></li>
                     <li><a ><i class="fa fa-eye"></i> <?= $detail_berita['jumlah_baca'];?> dilihat</a></li>
                     <li><a ><i class="fa fa-calendar"></i>peristiwa: <?= $detail_berita['tgl_berita'];?></a></li>
                  </ul>
                  <p class="excert justify">
                  <?=$isi?>
                  </p>
                  
               </div>
            </div>
            <?php $share=urlencode("https://smkni.sch.id/index.php?menu=$m&idmn=$idmn"); ?>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <ul class="social-icons">
                     <li><a href="https://www.facebook.com/sharer.php?u= <?= $share ?>" target="blink"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/share?url=<?= $share ?>" target="blink"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://telegram.me/share/url?url=<?= $share ?>" target="blink"><i class="fab fa-telegram"></i></a></li>
                     <li><a href="https://api.whatsapp.com/send?text=<?= $share ?>" target="blink"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <?php include "aznews/view/widget.php" ?>
         </div>
      </div>
   </div>
</section>



