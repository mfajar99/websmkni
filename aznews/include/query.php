<?php

$query_admin=mysqli_query($host1, "SELECT * FROM tbl_admin");
$query_organisasi=mysqli_query($host1, "SELECT  tbl_organisasi.id_organisasi, tbl_organisasi.nama_organisasi, tbl_organisasi.nama_singkat_organisasi, tbl_organisasi.kecamatan, tbl_organisasi.alamat, tbl_organisasi.email_organisasi, tbl_organisasi.no_hp_organisasi, tbl_organisasi.lokasi, tbl_organisasi.nama_kepala, tbl_organisasi.logo_organisasi, tbl_kecamatan.id_kecamatan, tbl_kecamatan.nama_kecamatan,tbl_kecamatan.id_kabupaten, tbl_kabupaten.id_kabupaten, tbl_kabupaten.nama_kabupaten, tbl_kabupaten.logo_kabupaten from tbl_organisasi, tbl_kecamatan, tbl_kabupaten where tbl_organisasi.kecamatan=tbl_kecamatan.id_kecamatan and tbl_kecamatan.id_kabupaten=tbl_kabupaten.id_kabupaten ");
$query_profil=mysqli_query($host1, "SELECT * FROM tbl_profil");
$query_berita=mysqli_query($host1, "SELECT * FROM tbl_berita");
$query_informasi=mysqli_query($host1, "SELECT * FROM tbl_informasi");
$query_program=mysqli_query($host1, "SELECT * FROM tbl_program");
$query_katagori=mysqli_query($host1, "SELECT * FROM tbl_katagori");
$query_background=mysqli_query($host1, "SELECT * FROM tbl_background");

// untuk admin
$admin=mysqli_fetch_array($query_admin);

// untuk organisasi
$organisasi=mysqli_fetch_array($query_organisasi);

?>