<?php
   include 'include/queryAdmin.php';
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="../dist/img/organisasi/<?php echo $organisasi['logo_organisasi']?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
      <span class="brand-text font-weight-light">SMKNI</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <a href="index.php?halaman=Admin&menu=Admin"><img src="../dist/img/admin/<?= $admin['foto_admin'] ?>" class="img-circle elevation-2" alt="User Image"></a>
         </div>
         <div class="info">
            <a href="index.php?halaman=Admin&menu=Admin" class="d-block"><?= $admin['nama_admin']; ?></a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index.php?halaman=Beranda&menu=Beranda" class="nav-link">
               <i class="nav-icon fas fa-home"></i>
               <p>
                  Beranda
               </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="index.php?halaman=Organisasi&menu=Organisasi" class="nav-link">
               <i class="nav-icon fas fa-book"></i>
               <p>
                  Organisasi
               </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-compass"></i>
               <p>
                  Berita
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="index.php?halaman=Berita&menu=Berita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Berita</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="index.php?halaman=Katagori&menu=Katagori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Katagori Berita</p>
                  </a>
               </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-th"></i>
               <p>
                  Background
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="index.php?halaman=Background&menu=Background" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner & Video</p>
                  </a>
               </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                  Profil
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="index.php?halaman=Profil&menu=Profil" class="nav-link">
                  <i class="fa fa-plus"></i>
                  &nbsp;<p> New menu</p>
                  </a>
               </li>
               <?php 
                  if(mysqli_num_rows($query_profil)) {
                     while($profil=mysqli_fetch_array($query_profil)){?>
                        <li class="nav-item">
                           <a href="index.php?halaman=Edit_menu_profil&id=<?= $profil['id_profil']?>&menu=Profil&mn=<?= $profil['submenu_profil']?>" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p><?= $profil['submenu_profil']?></p>
                           </a>
                        </li>
               <?php }}?>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                     Informasi
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="index.php?halaman=Informasi&menu=Informasi" class="nav-link">
               <i class="fa fa-plus"></i>
               &nbsp;<p> New menu</p>
               </a>
            </li>
               <?php 
                  if(mysqli_num_rows($query_informasi)) {
                  while($informasi=mysqli_fetch_array($query_informasi)){?>
                     <li class="nav-item">
                        <a href="index.php?halaman=Edit_menu_informasi&id=<?= $informasi['id_informasi']?>&menu=Informasi&mn=<?= $informasi['submenu_informasi']?>" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p><?= $informasi['submenu_informasi']?></p>
                        </a>
                     </li>
                  <?php }}?>
               </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-calendar-alt"></i>
               <p>
                  Program
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="index.php?halaman=Program&menu=Program" class="nav-link">
                     <i class="fa fa-plus"></i>
                  &nbsp;<p> New menu</p>
                  </a>
               </li>
               <?php 
                  if(mysqli_num_rows($query_program)) {
                  while($program=mysqli_fetch_array($query_program)){?>
                     <li class="nav-item">
                        <a href="index.php?halaman=Edit_menu_program&id=<?= $program['id_program']?>&menu=Program&mn=<?= $program['submenu_program']?>" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p><?= $program['submenu_program']?></p>
                        </a>
                     </li>
               <?php }}?>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>