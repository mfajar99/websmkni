<?php
$jumlah_foto=0;
$foto[]="";
   if(mysqli_num_rows($query_berita)) {
      while($berita=mysqli_fetch_array($query_berita)){
         $html = $berita['isi_berita'];
         if($berita['gambar_berita']!=""){
            $foto[$jumlah_foto]="administrator/dist/img/berita/$berita[gambar_berita]";
            $jumlah_foto=$jumlah_foto+1;
         }
      }
   }
?>
<div class="header-mid d-none d-md-block" style="background-image: linear-gradient(#FDFDFE, #002E7E); padding-top: 30px;">
   <div class="container">
      <div class="row d-flex align-items-left">
         <h3 style="color: white; text-align: center; margin-bottom: 30px; margin-left: 15px;">GALERI FOTO</h3>
      </div>
   </div>
</div>
<div class="whole-wrap">
   <div class="container box_1170">
      <div class="section-top-border">
         <div class="row gallery-item">
            <?php
               $query_berita=mysqli_query($host1, "SELECT * FROM tbl_berita");
               if(mysqli_num_rows($query_berita)) {
                  while($berita=mysqli_fetch_array($query_berita)){?>
               <div class="col-md-4">
                  <a href="administrator/dist/img/berita/<?=$berita['gambar_berita']?>" class="img-pop-up">
                     <div class="single-gallery-image" style="background: url(administrator/dist/img/berita/<?=$berita['gambar_berita']?>);"></div>
                  </a>
               </div>
            <?php } } ?>
         </div>
      </div>
   </div>
</div>