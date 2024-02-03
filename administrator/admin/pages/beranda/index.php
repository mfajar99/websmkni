<?php include 'include/queryAdmin.php'; ?>

<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <div class="inner">
                  <h3><?= $banyak_berita ?></h3>
                  <p>Daftar Berita</p>
               </div>
               <div class="icon">
                  <i class=""></i>
               </div>
               <a href="index.php?halaman=Berita&menu=Berita" class="small-box-footer">infomasi berita <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
               <div class="inner">
                  <h3><?= $banyak_profil ?><sup style="font-size: 20px"></sup></h3>
                  <p>Menu Profil</p>
               </div>
               <div class="icon">
                  <i class=""></i>
               </div>
               <a href="index.php?halaman=Profil&menu=Profil" class="small-box-footer">informasi Profil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
               <div class="inner">
                  <h3><?= $banyak_informasi ?></h3>
                  <p>Menu Informasi</p>
               </div>
               <div class="icon">
                  <i class=""></i>
               </div>
               <a href="index.php?halaman=Informasi&menu=Informasi" class="small-box-footer">Menu Informasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
         <!-- small box -->
            <div class="small-box bg-danger">
               <div class="inner">
                  <h3><?= $banyak_program ?></h3>
                  <p>Menu Program</p>
               </div>
               <div class="icon">
                  <i class="ion ion-pie-graph"></i>
               </div>
               <a href="index.php?halaman=Program&menu=Program" class="small-box-footer">informasi Program <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
         <!-- Left col -->
         <section class="col-lg-7 connectedSortable">
         <!-- Map card -->
         <div class="card bg-gradient-primary">
            <div class="card-header border-0">
               <h3 class="card-title">
               <?= $organisasi['nama_organisasi'] ?>
               </h3>
               <!-- card tools -->
               <div class="card-tools">
               <button type="button"
                     class="btn btn-primary btn-sm"
                     data-card-widget="collapse"
                     data-toggle="tooltip"
                     title="Collapse">
                  <i class="fas fa-minus"></i>
               </button>
               </div>
               <!-- /.card-tools -->
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-4 text-center">
                     <img class="profile-user-img img-fluid img-circle img-center" src="../dist/img/organisasi/<?= $organisasi['logo_organisasi'] ?>">
                  </div>
                  <div class="col-8">
                     <h1> <?= $organisasi['nama_organisasi'] ?> </h1>
                  </div>
               </div>
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
               <div class="row">
                  <div class="col-4 text-center">
                     <div id="sparkline-1"></div>
                     <div class="text-white"></div>
                  </div>
                  <!-- ./col -->
               <div class="col-4 text-center">
                  <div id="sparkline-2"></div>
                  <div class="text-white"></div>
               </div>
               <!-- ./col -->
               <div class="col-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="text-white"></div>
               </div>
               <!-- ./col -->
               </div>
               <!-- /.row -->
            </div>
         </div>
         <!-- /.card -->
         </section>
         <!-- /.Left col -->
         <!-- right col (We are only adding the ID to make the widgets sortable)-->
         <section class="col-lg-5 connectedSortable">
         <!-- Calendar -->
         <div class="card bg-gradient-success">
            <div class="card-header border-0">
               <h3 class="card-title">
               <i class="far fa-calendar-alt"></i>
               Calendar
               </h3>
               <!-- tools card -->
               <div class="card-tools">
                  <!-- button with a dropdown -->
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                     <i class="fas fa-times"></i>
                  </button>
               </div>
               <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
               <!--The calendar -->
               <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
         </section>
         <!-- right col -->
      </div>
      <!-- /.row (main row) -->
   </div><!-- /.container-fluid -->
</section>
<!-- /.content -->