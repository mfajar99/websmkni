<main>
   <!-- Whats New Start -->
   <section class="whats-news-area">
      <div class="container">
      <!-- Hot Aimated News Tittle-->
         <div class="row">
            <div class="col-lg-12">
               <div class="trending-tittle">
                  <strong><?= $menu ?></strong>
                  </div>
               </div>
            </div>
         <div class="row">
         <div class="col-lg-8">
            <div class="row d-flex justify-content-between">
               <div class="col-lg-3 col-md-3">
                  <div class="section-tittle mb-30">
                     <h3><?= $nama_menu ?></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <!-- Nav Card -->
                  <div class="tab-content" id="nav-tabContent">
                     <!-- card one -->
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                        <div class="whats-news-caption">
                           <?php 
                              $halaman = 10;
                              $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                              $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                              $result = mysqli_query($host1,"select tbl_berita.id_berita, tbl_berita.judul_berita, tbl_berita.tgl_berita, tbl_berita.tgl_upload, tbl_berita.isi_berita, tbl_berita.katagori_berita, tbl_berita.jumlah_baca, tbl_katagori.id_katagori, tbl_katagori.nama_katagori from tbl_berita ,tbl_katagori where tbl_berita.katagori_berita=tbl_katagori.id_katagori and tbl_berita.katagori_berita=$idmn order by id_berita Desc");
                              $total = mysqli_num_rows($result);
                              $pages = ceil($total/$halaman);
                              $query = mysqli_query($host1,"select tbl_berita.id_berita, tbl_berita.judul_berita, tbl_berita.tgl_berita, tbl_berita.tgl_upload,tbl_berita.gambar_berita, tbl_berita.isi_berita, tbl_berita.katagori_berita, tbl_berita.jumlah_baca, tbl_katagori.id_katagori, tbl_katagori.nama_katagori from tbl_berita ,tbl_katagori where tbl_berita.katagori_berita=tbl_katagori.id_katagori and tbl_berita.katagori_berita=$idmn order by id_berita Desc LIMIT $mulai, $halaman");
                              
                              $no =$mulai+1;
                           ?> 
                           <div class="row">
                           <?php
                              if(mysqli_num_rows($query)) {
                                 while($berita=mysqli_fetch_array($query)){
                                    $isi_berita=$berita['isi_berita'];
                                    $html = $berita['isi_berita'];
                           ?>
                              <div class="col-lg-6 col-md-6">
                                 <div class="single-what-news mb-100">
                                    <div class="what-img">
                                          <a href="index.php?menu=detail_berita&idmn=<?php echo $berita['id_berita'] ?>"><img src="administrator/dist/img/berita/<?=$berita['gambar_berita']?>" alt=""></a>
                                    </div>
                                    <div class="what-cap">
                                          <a href="index.php?menu=detail_berita&idmn=<?php echo $berita['id_berita'] ?>"><span class="color1"><?php echo $berita['judul_berita']?></span></a>
                                          <p><i class="far fa-calendar-alt"></i> <?php echo $berita['tgl_berita']?><br> katagori : <?php echo $berita['nama_katagori']?></p>
                                          <a href="#"> <p> <?= substr(strip_tags($html), 0, 50); echo "[...]"?></p></a>
                                    </div>
                                 </div>
                              </div>
                              <?php }} ?>
                           </div>
                        </div>
                     </div>
                  </div>
               <!-- End Nav Card -->
               </div>
            </div>
         </div>
            <div class="col-lg-4">
               <?php include "aznews/view/widget.php" ?>
            </div>
         </div>
      </div>
   </section>
   <!-- Whats New End -->
   <!--Start pagination -->
   <div class="pagination-area pb-45 text-center">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="single-wrap d-flex justify-content-center">
                  <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-start">
                     <?php for ($i=1; $i<=$pages ; $i++){?>
                        <li class="page-item"><a class="page-link" href="index.php?menu=katagori&idmn=<?=$idmn?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                     <?php } ?>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End pagination  -->
</main>