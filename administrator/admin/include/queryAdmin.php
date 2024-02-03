<?php
   $query_admin=mysqli_query($host1, "SELECT * FROM tbl_admin");
   $query_organisasi=mysqli_query($host1, "SELECT * FROM tbl_organisasi");
   $query_profil=mysqli_query($host1, "SELECT * FROM tbl_profil");
   $query_berita=mysqli_query($host1, "SELECT * FROM tbl_berita ORDER BY id_berita DESC");
   $query_informasi=mysqli_query($host1, "SELECT * FROM tbl_informasi");
   $query_program=mysqli_query($host1, "SELECT * FROM tbl_program");
   $query_katagori=mysqli_query($host1, "SELECT * FROM tbl_katagori");
   $query_background=mysqli_query($host1, "SELECT * FROM tbl_background");
   // untuk admin
   $admin=mysqli_fetch_array($query_admin);
   // untuk organisasi
   $organisasi=mysqli_fetch_array($query_organisasi);
   $banyak_berita=mysqli_num_rows($query_berita);
   $banyak_profil=mysqli_num_rows($query_profil);
   $banyak_informasi=mysqli_num_rows($query_informasi);
   $banyak_program=mysqli_num_rows($query_program);
?>