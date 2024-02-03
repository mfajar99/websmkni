 <!--================Blog Area =================-->
<div class="header-mid d-none d-md-block" style="background-image: linear-gradient(#FDFDFE, #002E7E); padding-top: 30px;">
   <div class="container">
      <div class="row d-flex align-items-left">
         <h3 style="color: white; text-align: center; margin-bottom: 30px; margin-left: 15px;"><?= $judul?></h3>
      </div>
   </div>
</div>
 <section class="blog_area single-post-area">
      <div class="container">
        <!-- Hot Aimated News Tittle-->
        <div class="row">
            <div class="col-lg-12">
               <!-- <div class="trending-tittle" >
                  <strong><?=$m?> / <?= $nama_menu ?></strong>
               </div> -->
            </div>
        </div>
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post ">
                  <!-- <h2 class="text-center"><?= $judul?></h2> -->
                  <br>
                  <div class="feature-img" style="object-position: center;">
                     <img class="img-fluid" src="administrator/dist/img/<?=$m?>/<?=$gambar_menu?>" alt="" width="500" style="display: block; margin-left: auto; margin-right: auto;">
                  </div>
                  <div class="blog_details justify">
                     <p>
                     <?= $isi ?>
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
   <!--================ Blog Area end =================-->