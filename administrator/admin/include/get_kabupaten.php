<?php
	include '../../koneksi.php';
	session_start();
	echo "<option value=''>Pilih Kabupaten</option>";

	$query_organisasi=mysqli_query($host1, "SELECT *FROM tbl_organisasi");
	$organisasi = mysqli_fetch_array($query_organisasi);
	$id_kecamatan=$organisasi['kecamatan'];
	$query_kecamatan=mysqli_query($host1, "SELECT *FROM tbl_kecamatan where id_kecamatan=$id_kecamatan");
	$kecamatan=mysqli_fetch_array($query_kecamatan);
	$id_kabupaten=$kecamatan['id_kabupaten'];

	$query_kabupaten=mysqli_query($host1, "SELECT *FROM tbl_kabupaten");
	while($kabupaten = mysqli_fetch_array($query_kabupaten)){
		if($id_kabupaten==$kabupaten['id_kabupaten']){
			echo "<option value='" . $kabupaten['id_kabupaten'] . "' selected>" . $kabupaten['nama_kabupaten'] . "</option>";
		}else{
			echo "<option value='" . $kabupaten['id_kabupaten'] . "' >" . $kabupaten['nama_kabupaten'] . "</option>";
		}
	}
?>