<?php
	include "../../../koneksi.php";

	$Id_katagori=$_GET['id'];
	$hapuskatagori=mysqli_query($host1, "DELETE FROM tbl_katagori WHERE id_katagori=$Id_katagori ");

	if($hapuskatagori){
		echo"<script>
		alert('Katagori berhasil dihapus');
		document.location.href='../../index.php?halaman=Katagori&menu=Katagori';
		</script>";
	}else{
		echo"<script>
		alert('Katagori gagal dihapus');
		document.location.href='../../index.php?halaman=Katagori&menu=Katagori';
		</script>";
	}
?>