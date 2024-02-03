<?php
   include "../../../koneksi.php";
   $id_background=$_GET['id'];
   $hapus=mysqli_query($host1,"select *from tbl_background where id_background='$id_background'");
   // memilih gambar untuk dihapus
   $nama_gambar=mysqli_fetch_array($hapus);
   $lokasi=$nama_gambar['foto_background'];
   // alamat tempat gambar
   $hapus_gambar="../../../dist/img/background/$lokasi";
   // script delete gambar dari folder
   $hapus=mysqli_query($host1, "DELETE FROM tbl_background WHERE id_background='$id_background' ");
   if($hapus){
      unlink($hapus_gambar);
      echo"<script>
            alert('data berhasil dihapus');
            document.location.href='../../index.php?halaman=Background&menu=Background';
           </script>";
   }else{
      echo"<script>
            alert('data gagal dihapus');
           </script>";
   }
?>