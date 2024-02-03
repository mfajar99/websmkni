<?php
   include "../../../../koneksi.php";

   $id=$_GET['id'];
   $hapus=mysqli_query($host1, "DELETE FROM tbl_menu WHERE id_menu='$id' ");

   if($hapus){
      echo"<script>
      alert('menu berhasil dihapus');
      document.location.href='../../index.php?halaman=Menu_tambahan&menu=Menu Tambahan';
      </script>";
   }else{
      echo"<script>
      alert('Menu gagal dihapus');
      document.location.href='../../index.php?halaman=Menu_tambahan&menu=Menu Tambahan';
      </script>";
   }
?>