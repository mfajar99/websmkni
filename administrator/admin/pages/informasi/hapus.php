<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	include "../../../koneksi.php";

	$id=$_GET['id'];
	$ambil_informasi=mysqli_query($host1,"select * from tbl_informasi where id_informasi=$id");
	$informasi=mysqli_fetch_array($ambil_informasi);
	$lokasi=$informasi['gambar_menu_informasi'];
	// alamat tempat gambar
	$hapus_gambar="../../../dist/img/informasi/$lokasi";

	$hapus=mysqli_query($host1, "DELETE FROM tbl_informasi WHERE id_informasi='$id' ");
	if($hapus){
		// script delete gambar dari folder
		unlink($hapus_gambar);
		echo"<script>
		alert('menu berhasil dihapus');
		document.location.href='../../index.php?halaman=Informasi&menu=Informasi';
		</script>";
	}else{
		echo"<script>
		alert('Menu gagal dihapus');
		document.location.href='../../index.php?halaman=Informasi&menu=Informasi';
		</script>";
	}
?>