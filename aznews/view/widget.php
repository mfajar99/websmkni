<br>
<div class="blog_right_sidebar">
   <aside class="single_sidebar_widget search_widget">
      <form action="#" method="post">
         <div class="form-group">
            <div class="input-group mb-3">
               <input type="text" class="form-control" name="cari_berita" placeholder='Cari Berita' required>
               <!-- <div class="input-group-append">
                  <button class="btns" type="button"><i class="ti-search"></i></button>
               </div> -->
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
      <div id="gpr-kominfo-widget-container"></div>
      <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
   </aside> -->
</div>