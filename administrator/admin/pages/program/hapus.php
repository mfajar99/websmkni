<?php
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   include "../../../koneksi.php";

   $id=$_GET['id'];
   $ambil_program=mysqli_query($host1,"select * from tbl_program where id_program=$id");
   $program=mysqli_fetch_array($ambil_program);
   $lokasi=$program['gambar_menu_program'];
   // alamat tempat gambar
   $hapus_gambar="../../../dist/img/program/$lokasi";

   $hapus=mysqli_query($host1, "DELETE FROM tbl_program WHERE id_program='$id' ");
   if($hapus){
      // script delete gambar dari folder
      unlink($hapus_gambar);
      echo"<script>
      alert('menu berhasil dihapus');
      document.location.href='../../index.php?halaman=Program&menu=Program';
      </script>";
   }else{
      echo"<script>
      alert('Menu gagal dihapus');
      document.location.href='../../index.php?halaman=Program&menu=Program';
      </script>";
   }
?>