<header>
   <!-- Header Start -->
   <div class="header-area">
      <div class="main-header ">
         <div class="header-top black-bg d-none d-md-block">
            <div class="container">
               <div class="col-xl-12">
                  <div class="row d-flex justify-content-between align-items-center">
                     <div class="header-info-left">
                     <?php
                        $tgl=date('d-m-Y');
                        $daftar_hari = array(
                        'Sunday' => 'Minggu',
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu'
                        );
                        $namahari = date('l', strtotime($tgl));
                        ?>
                        <ul>     
                           <li><img src="aznews/assets/img/icon/header_icon2.png" alt=""><?= $daftar_hari[$namahari] ?>, <?=$tgl?></li>
                        </ul> 
                     </div>
                        <div class="header-info-right">
                           <ul class="header-social">    
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-mid d-none d-md-block">
            <div class="container">
               <div class="row d-flex align-items-center">
                  <!-- Logo -->
                  <div class="col-xl-3 col-lg-3 col-md-3">
                     <div class="logo">
                        <a href="index.php?menu=home"><img src="administrator/dist/img/organisasi/logo-smkni-2.png" width="185" height="62" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9">
                      <!-- Main-menu -->
                     <div class="main-menu d-none d-md-block" >
                        <nav>                  
                           <ul id="navigation">    
                              <li><a href="index.php?menu=home">HOME </a></li>
                              
                              <li><a href="#">PROFIL <i class="fas fa-caret-down"></i></a>
                                 <ul class="submenu">
                                 <?php 
                                    if(mysqli_num_rows($query_profil)) {
                                       while($profil=mysqli_fetch_array($query_profil)){?>
                                    <li><a href="index.php?menu=profil&idmn=<?=$profil['id_profil']?>"><?=$profil['submenu_profil']?></a></li>
                                    <?php }} ?>
                                 </ul>
                              </li>
                              <li><a href="#">INFORMASI <i class="fas fa-caret-down"></i></a>
                                 <ul class="submenu">
                                 <?php 
                                    if(mysqli_num_rows($query_informasi)) {
                                       while($informasi=mysqli_fetch_array($query_informasi)){?>
                                    <li><a href="index.php?menu=informasi&idmn=<?=$informasi['id_informasi']?>"><?=$informasi['submenu_informasi']?></a></li>
                                    <?php }} ?>
                                 </ul>
                              </li>
                              <li><a href="#">PROGRAM <i class="fas fa-caret-down"></i></a>
                                 <ul class="submenu">
                                 <?php 
                                    if(mysqli_num_rows($query_program)) {
                                       while($program=mysqli_fetch_array($query_program)){?>
                                    <li><a href="index.php?menu=program&idmn=<?=$program['id_program']?>"><?=$program['submenu_program']?></a></li>
                                    <?php }} ?>
                                 </ul>
                              </li>
                              <li><a href="index.php?menu=foto">GALERI </a></li>
                              <li><a href="index.php?menu=berita">BERITA</a></li>
                              <li><a href="#kontak" class="scrolling">KONTAK</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom blue-bg header-sticky" >
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                     <!-- sticky -->
                     <div class="sticky-logo">
                        <a href="index.php?menu=home"><img src="administrator/dist/img/organisasi/logo-smkni-2.png" width="160" height="60" alt=""></a>
                     </div>
                     <!-- Main-menu -->
                  </div>
                  <!-- Mobile Menu -->
                  <div class="col-12">
                     <div class="mobile_menu d-block d-md-none"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
   </div>
   <!-- Header End -->
</header>