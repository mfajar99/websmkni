<?php
   include "../../../koneksi.php";

   $id_berita=$_GET['id'];
   $query_berita1=mysqli_query($host1, "SELECT * FROM tbl_berita WHERE id_berita=$id_berita");
   $berita=mysqli_fetch_array($query_berita1);
   $lokasi=$berita['gambar_berita'];
   // alamat tempat gambar
   $hapus_gambar="../../../dist/img/berita/$lokasi";
   // script delete gambar dari folder
   $hapusberita=mysqli_query($host1, "DELETE FROM tbl_berita WHERE id_berita=$id_berita ");

   if($hapusberita){
      unlink($hapus_gambar);
      echo"<script>
      alert('Berita berhasil dihapus');
      document.location.href='../../index.php?halaman=Berita&menu=Berita';
      </script>";
   }else{
      echo"<script>
      alert('Berita gagal dihapus');
      document.location.href='../../index.php?halaman=Berita&menu=Berita';
      </script>";
   }
?>