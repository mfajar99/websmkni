<?php 
   include '../koneksi.php';
   session_start();

   if($_SESSION['status_admin']!="login"){
      header("location:../index.php?pesan=belum_login");
   }
   $id_admin=$_SESSION['id_admin'];
   $query_organisasi=mysqli_query($host1, "SELECT *FROM tbl_organisasi ");
   $organisasi=mysqli_fetch_array($query_organisasi);
   include 'views/header.php';
   include 'views/navbar.php';
   include 'views/sidebar.php';
?>

<?php 
   include 'views/header-page.php';
   include 'views/page-konten.php';
?>
  
<?php 
   include 'views/footer.php';
?>