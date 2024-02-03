<?php
  $menu=$_GET['menu'];
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?= $menu ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?halaman=Beranda&menu=Beranda">Beranda</a></li>
            <li class="breadcrumb-item active"><a href="index.php?halaman=<?=$menu?>&menu=<?=$menu?>"><?= $menu ?></a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->