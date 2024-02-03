<?php 
	// mengaktifkan session php
	session_start();

	// menghubungkan dengan koneksi
	include 'koneksi.php';

	// menangkap data yang dikirim dari form
	$email = $_POST['email_admin'];
	$password = $_POST['password_admin'];
	
	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($host1,"SELECT * FROM tbl_admin WHERE username_admin='$email' AND password_admin='$password'");
	 
	// menghitung jumlah data yang ditemukan
	$cek1 = mysqli_num_rows($data);
	$ad=mysqli_fetch_array($data);
	if($cek1 > 0){
		$_SESSION['id_admin'] = $ad['id_admin'];
		$_SESSION['status_admin'] = "login";
		header("location:admin/index.php?halaman=Beranda&menu=Beranda");
	}else{
		header("location:index.php?pesan=gagal");
	}
?>