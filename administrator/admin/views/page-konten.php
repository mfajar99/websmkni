<?php 
   $pages=$_GET['halaman'];
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   if($pages=='Beranda'){
      include 'pages/beranda/index.php';
   }elseif($pages=='Organisasi'){
      include 'pages/organisasi/index.php';
   }elseif($pages=='Admin'){
      include 'pages/profilAdmin/index.php';
   }elseif($pages=='Profil'){
      include 'pages/menuProfil/index.php';
   }elseif($pages=='Ubah_menuProfil'){
      include 'pages/menuProfil/ubah.php';
   }elseif($pages=='Edit_menu_profil'){
      include 'pages/menuProfil/utama.php';
   }elseif($pages=='Input'){
      include 'pages/input/index.php';
   }elseif($pages=='Informasi'){
      include 'pages/informasi/index.php';
   }elseif($pages=='Ubah_menuinformasi'){
      include 'pages/informasi/ubah.php';
   }elseif($pages=='Edit_menu_informasi'){
      include 'pages/informasi/utama.php';
   }elseif($pages=='Program'){
      include 'pages/program/index.php';
   }elseif($pages=='Ubah_menuprogram'){
      include 'pages/program/ubah.php';
   }elseif($pages=='Edit_menu_program'){
      include 'pages/program/utama.php';
   }elseif($pages=='Katagori'){
      include 'pages/katagori/index.php';
   }elseif($pages=='Ubah_katagori'){
      include 'pages/katagori/ubah.php';
   }elseif($pages=='Berita'){
      include 'pages/berita/index.php';
   }elseif($pages=='Tambah_berita'){
      include 'pages/berita/tambah.php';
   }elseif($pages=='Detail_berita'){
      include 'pages/berita/detail.php';
   }elseif($pages=='Ubah_berita'){
      include 'pages/berita/ubah.php';
   }elseif($pages=='Background'){
      include 'pages/background/index.php';
   }elseif($pages=='Ubah_background'){
      include 'pages/background/ubah.php';
   }else{
      include 'pages/beranda/index.php';
   }
?>