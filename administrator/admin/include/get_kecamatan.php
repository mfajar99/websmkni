<?php
	include '../../koneksi.php';
	$id_kabupaten = $_POST['kabupaten'];

	echo "<option value=''>Pilih Kecamatan</option>";
	$query_organisasi=mysqli_query($host1, "SELECT *FROM tbl_organisasi");
	$organisasi = mysqli_fetch_array($query_organisasi);
	$id_kecamatan=$organisasi['kecamatan'];

	$query_kecamatan=mysqli_query($host1,"SELECT * FROM tbl_kecamatan WHERE id_kabupaten=$id_kabupaten ORDER BY nama_kecamatan ASC");
	while($kecamatan = mysqli_fetch_array($query_kecamatan)){
		if($id_kecamatan==$kecamatan['id_kecamatan']){

			echo "<option value='" . $kecamatan['id_kecamatan'] . "' selected>" . $kecamatan['nama_kecamatan'] . "</option>";
		}else{

			echo "<option value='" . $kecamatan['id_kecamatan'] . "'>" . $kecamatan['nama_kecamatan'] . "</option>";
		}
	}
?>