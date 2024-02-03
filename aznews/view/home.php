<main>
   <div class="container">
      <div class="bd-example">
         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php  
               $query_background=mysqli_query($host1, "SELECT * FROM tbl_background");
               $s1=1;
               if(mysqli_num_rows($query_background)) {
                  while($b=mysqli_fetch_array($query_background)){
                  if($s1==1){
                     $aktif="active";
                  }else{
                     $aktif=" ";
                  }?>
               <div class="carousel-item <?= $aktif?>">
                  <img src="administrator/dist/img/background/<?=$b['foto_background']?>" class="d-block w-100" alt="gambar" width="1140" height="450">
               </div>
               <?php $s1=$s1+1; }}?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>

   <!-- Trending Area Start -->
   <div class="trending-area fix">
      <div class="container">
         <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="trending-tittle">
                     <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                     <div class="trending-animated">
                        <ul id="js-news" class="js-hidden">
                           <?php  
                              $query_background=mysqli_query($host1, "SELECT * FROM tbl_background");
                              $s1=1;
                              if(mysqli_num_rows($query_background)) {
                                 while($b=mysqli_fetch_array($query_background)){?>
                              <li class="news-item"><h5 style="color: black; text-transform: uppercase;"><?=$b['text1']?></h5></li>
                           <?php }}?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8">
                  <!-- Trending Top -->
                  <?php 
                     $query_berita_terbaru=mysqli_query($host1, "SELECT * FROM tbl_berita ORDER BY id_berita Desc limit 1");
                     $berita_terbaru=mysqli_fetch_array($query_berita_terbaru);
                     $html = $berita_terbaru['isi_berita'];
                     $judul = $berita_terbaru['judul_berita'];
                  ?>
                  <div class="trending-top mb-30">
                     <div class="trend-top-img">
                        <img src="administrator/dist/img/berita/<?=$berita_terbaru['gambar_berita']?>" alt="">
                        <div class="trend-top-cap">
                           <span><?= $berita_terbaru['tgl_upload'] ?></span>
                           <h2><a href="index.php?menu=detail_berita&idmn=<?php echo $berita_terbaru['id_berita'] ?>"><?= substr(strip_tags($judul), 0, 30); echo "...";?></a></h2>
                        </div>
                     </div>
                  </div>

                  <!--   Weekly-News start -->
                  <div class="weekly-news-area pt-50">
                     <div class="container">
                        <div class="weekly-wrapper">
                           <!-- section Tittle -->
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="section-tittle mb-30">
                                    <h3>Berita Terbaru</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="weekly-news-active dot-style d-flex dot-style">
                                 <?php 
                                    $query_berita_widget=mysqli_query($host1, "SELECT * FROM tbl_berita ORDER BY id_berita DESC LIMIT 5");
                                    if(mysqli_num_rows($query_berita_widget)) {
                                       while($berita_widget=mysqli_fetch_array($query_berita_widget)){
                                       $judu_berita = $berita_widget['judul_berita'];
                                          ?>
                                    <div class="weekly-single">
                                       <div class="weekly-img">
                                          <img src="administrator/dist/img/berita/<?=$berita_widget['gambar_berita']?>" width="100" alt="">
                                       </div>
                                       <!-- <br> -->
                                       <div class="trand-right-cap">
                                          <span class="color1" style="background-color: red;"><?=$katagori['id_katagori']?></span>
                                          <!-- <br> -->
                                          <span class="color1"><?= $berita_widget['tgl_upload'] ?></span>
                                          <h6><a href="index.php?menu=detail_berita&idmn=<?php echo $berita_widget['id_berita'] ?>"><?= substr(strip_tags($judu_berita), 0, 25); echo "...";?></a></h6>
                                       </div>
                                    </div>
                                 <?php }} ?> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>           
                  <!-- End Weekly-News -->
                  
                   <!-- Start Youtube -->
                  <div class="youtube-area video-padding">
                     <div class="container">
                        <!-- section Tittle -->
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="section-tittle mb-30">
                                 <h3>Vidio Sekolah</h3>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="video-items-active">
                              <?php  
                              $query_background=mysqli_query($host1, "SELECT * FROM tbl_background");
                              if(mysqli_num_rows($query_background)) {
                                 while($b=mysqli_fetch_array($query_background)){?>
                              <div class="video-items text-center">
                                 <iframe src="https://www.youtube.com/embed/<?=$b['video_background']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <?php }}?>
                              </div>
                           </div>
                        </div>
                        <div class="video-info">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="testmonial-nav text-center">
                                    <?php $query_background=mysqli_query($host1, "select *from tbl_background");
                                          if(mysqli_num_rows($query_background)) {
                                          while($b=mysqli_fetch_array($query_background)){?>
                                       <div class="single-video">
                                          <iframe  src="https://www.youtube.com/embed/<?=$b['video_background']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          <div class="video-intro">
                                             <h6><?=$b['text2']?></h6>
                                          </div>
                                       </div>
                                    <?php }}?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
                  <!-- End Start youtube -->
               </div>
               <!-- Right content -->
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <aside class="single_sidebar_widget search_widget">
                        <form action="#" method="post">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" name="cari_berita" placeholder='Cari Berita' required>
                              </div>
                           </div>
                           <button class="button rounded-0 text-white w-100 btn_1 boxed-btn" type="submit" name="cari">Search</button>
                        </form>
                        <?php 
                           if(isset($_POST['cari'])){
                              $cari=addslashes($_POST['cari_berita']);
                                 echo "<script>
                                       document.location.href='index.php?menu=berita&cari=$cari';
                                       </script>";
                                    }
                        ?>
                     </aside>
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Katagori</h4>
                        <ul class="list cat-list">
                           <?php while($katagori=mysqli_fetch_array($query_katagori)){
                              $query_jumlah_katagori=mysqli_query($host1,"SELECT * FROM tbl_berita WHERE katagori_berita=$katagori[id_katagori]");
                              $jumlah_katagori=mysqli_num_rows($query_jumlah_katagori);
                           ?>
                           <li>
                              <a href="index.php?menu=katagori&idmn=<?=$katagori['id_katagori']?>" class="d-flex">
                                 <p><?= $katagori['nama_katagori'] ?></p>
                                 <p>(<?= $jumlah_katagori ?>)</p>
                              </a>
                           </li>
                           <?php } ?>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Postingan Terbaru</h3>
                           <?php 
                              $query_berita_widget=mysqli_query($host1, "SELECT * FROM tbl_berita ORDER BY id_berita DESC LIMIT 3");
                              if(mysqli_num_rows($query_berita_widget)) {
                                 while($berita_widget=mysqli_fetch_array($query_berita_widget)){
                                 $judu_berita = $berita_widget['judul_berita'];
                                 $html = $berita_widget['isi_berita'];
                           ?>
                        <div class="media post_item">
                           <img src="administrator/dist/img/berita/<?=$berita_widget['gambar_berita']?>" width="100" alt="post">
                           <div class="media-body">
                              <a href="index.php?menu=detail_berita&idmn=<?php echo $berita_widget['id_berita'] ?>">
                                 <h3><?= substr(strip_tags($judu_berita), 0, 25); echo "...";?></h3>
                              </a>
                              <p><?= $berita_widget['tgl_berita'] ?></p>
                           </div>
                        </div>
                        <?php }} ?>
                     </aside>

                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Postingan Populer</h3>
                           <?php 
                              $query_berita_widget2=mysqli_query($host1, "SELECT * FROM tbl_berita ORDER BY jumlah_baca DESC LIMIT 3");
                              if(mysqli_num_rows($query_berita_widget2)) {
                                 while($berita_widget2=mysqli_fetch_array($query_berita_widget2)){
                                 $judu_berita = $berita_widget2['judul_berita'];
                                 $html = $berita_widget2['isi_berita'];
                           ?>
                        <div class="media post_item">
                           <img src="administrator/dist/img/berita/<?=$berita_widget2['gambar_berita']?>" width="100" alt="post">
                           <div class="media-body">
                              <a href="index.php?menu=detail_berita&idmn=<?php echo $berita_widget2['id_berita'] ?>">
                                 <h3><?= substr(strip_tags($judu_berita), 0, 25); echo "...";?></h3>
                              </a>
                              <p><?= $berita_widget2['tgl_berita'] ?></p>
                           </div>
                        </div>
                        <?php }} ?>
                     </aside>
                     <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Berita Covid-19</h4>
                        <div id="gpr-kominfo-widget-container" ">
                           <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                        </div>
                     </aside> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Trending Area End -->
   
  
</main>