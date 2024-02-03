<?php
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   include "../../../koneksi.php";

   $id=$_GET['id'];
   $ambil_profil=mysqli_query($host1,"select * from tbl_profil where id_profil=$id");
   $profil=mysqli_fetch_array($ambil_profil);
   $lokasi=$profil['gambar_menu_profil'];
   
   // alamat tempat gambar
   $hapus_gambar="../../../dist/img/profil/$lokasi";

   $hapus=mysqli_query($host1, "DELETE FROM tbl_profil WHERE id_profil='$id' ");
   if($hapus){
      // script delete gambar dari folder
      unlink($hapus_gambar);
      echo"<script>
      alert('menu berhasil dihapus');
      document.location.href='../../index.php?halaman=Profil&menu=Profil';
      </script>";
   }else{
      echo"<script>
      alert('Menu gagal dihapus');
      document.location.href='../../index.php?halaman=Profil&menu=Profil';
      </script>";
   }
?>