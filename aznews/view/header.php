<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?=$organisasi['nama_singkat_organisasi']?> | <?= $judul ?></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--share-->
      <meta property="og:title" content="<?= $judul ?>" />
      <meta property="og:description" content="<?= $deskripsi ?>" />
      <meta property="og:image" itemprop="image" content="<?= $gambar_share ?>">
      <link rel="manifest" href="site.webmanifest">
      <link rel="shortcut icon" type="image/x-icon" href="administrator/dist/img/organisasi/<?=$organisasi['logo_organisasi']?>">
      <!-- CSS here -->
      <link rel="stylesheet" href="aznews/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="aznews/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="aznews/assets/css/ticker-style.css">
      <link rel="stylesheet" href="aznews/assets/css/flaticon.css">
      <link rel="stylesheet" href="aznews/assets/css/slicknav.css">
      <link rel="stylesheet" href="aznews/assets/css/animate.min.css">
      <link rel="stylesheet" href="aznews/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="aznews/assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="aznews/assets/css/themify-icons.css">
      <link rel="stylesheet" href="aznews/assets/css/slick.css">
      <link rel="stylesheet" href="aznews/assets/css/nice-select.css">
      <link rel="stylesheet" href="aznews/assets/css/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <style>
      .map-responsive{
         overflow:hidden;
         padding-bottom:50%;
         position:relative;
         height:0;
      }
      .map-responsive iframe{
         left:0;
         top:0;
         height:100%;
         width:100%;
         position:absolute;
      } 
      .left    { text-align: left;}
      .right   { text-align: right;}
      .center  { text-align: center;}
      .justify { text-align: justify;}
   </style>
</head>
<body>