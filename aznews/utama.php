<?php
   include "aznews/include/koneksi.php";
   include "aznews/include/query.php";
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   $m=$_GET['menu'];
   $idmn=$_GET['idmn'];
   include "aznews/include/koding_view.php";
   include "aznews/view/header.php";
   include "aznews/view/navbar.php" ?>

<?php         
   if($m=="home"){
      include "aznews/view/home.php";
   }elseif($m=="profil"){
      include "aznews/view/view_menu.php";
   }elseif($m=="informasi"){
      include "aznews/view/view_menu.php";
   }elseif($m=="program"){
      include "aznews/view/view_menu.php";
   }elseif($m=="berita"){
      include "aznews/view/berita.php";
   }elseif($m=="detail_berita"){
      include "aznews/view/detail_berita.php";
   }elseif($m=="katagori"){
      include "aznews/view/katagori.php";
   }elseif($m=="foto"){
      include "aznews/view/view_foto.php";
   }else{
      include "aznews/view/home.php";
   }
   ?>

 <?php include "aznews/view/footer.php" ?>