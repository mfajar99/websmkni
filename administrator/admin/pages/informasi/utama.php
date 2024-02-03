<?php
	$mn=$_GET['mn'];
	$menu=$_GET['menu'];
	$id=$_GET['id'];

	$ambil_informasi=mysqli_query($host1,"select * from tbl_informasi where id_informasi=$id");
	$informasi=mysqli_fetch_array($ambil_informasi);
	$gambar_informasi=$informasi['gambar_menu_informasi'];
	if($gambar_informasi=="gambar.jpg"){
	$new_gambar_informasi="no-image.jpg";
	}else{
	$new_gambar_informasi=$gambar_informasi;
	}
?>

<!-- /.col -->
<div class="col-md-12">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h3 class="card-title"><?=$mn?></h3>
		</div>
		<!-- /.card-header -->
		<form  method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<input class="form-control" name="judul" placeholder="Judul :" value="<?= $informasi['judul_informasi'] ?>">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Gambar</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" name="foto" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Pilih Gambar</label>
								</div>
								<div class="input-group-append">
									<!-- <span class="input-group-text" >Upload</span> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<img src="../dist/img/informasi/<?= $new_gambar_informasi ?>" class="fluid-img" width="300" height="300" >
							<div class="card-footer" style="background-color: white;">
								<button type="submit" name="hapus_gambar" class="btn btn-danger float-left" onclick="return confirm('yakin?');">Hapus</button>
							</div>
						</div>
					</div>
				</div>
			<div class="form-group">
				<textarea id="compose-textarea" name="isi" class="form-control" style="height: 100;">
				<?= $informasi['isi_informasi'] ?>
				</textarea>
			</div>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
			<div class="float-right">
				<button type="submit" name="isi_menu" class="btn btn-primary"> Simpan</button>
			</div>
		</div>
		<!-- /.card-footer -->
		</form>
	</div>
	<!-- /.card -->
</div>
<!-- /.col -->
<?php
	$h="";
	$hapus_gambar="";

	if(isset($_POST['isi_menu'])){
	$isi_menu=addslashes($_POST['isi']);
	$judul=addslashes($_POST['judul']);
	$file=$_FILES['foto']['name'];

	if($file==""){
		$file=$informasi['gambar_menu_informasi'];
		$h=$file;
	}else{
		$sqlCommand = "SELECT COUNT(*) FROM tbl_informasi";
		$urut=round(microtime(true));
		$file="img-".$urut.$file;
	}

	$format=pathinfo($file,PATHINFO_EXTENSION);
	if(($format== "jpg") or ($format== "png") or ($format== "JPG") or ($format== "PNG")or ($format== "jpeg")or ($format== "JPEG")){

		$masuk=mysqli_query($host1,"UPDATE tbl_informasi SET judul_informasi='$judul', isi_informasi='$isi_menu', gambar_menu_informasi='$file' where id_informasi='$id'");
		if($file==$h){
		echo"";
		}else{
			$lokasi=$informasi['gambar_menu_informasi'];
			// alamat tempat gambar
			$hapus_gambar="../dist/img/informasi/$lokasi";
			// script delete gambar dari folder
		}

		if($masuk){
		if($file !=$h){
			unlink($hapus_gambar);
			$cek=move_uploaded_file($_FILES['foto']['tmp_name'],'../dist/img/informasi/'.$file);
		}
			echo "<script>
			alert('data berhasil disimpan');
			document.location.href='index.php?halaman=Edit_menu_informasi&id=$informasi[id_informasi]&menu=Informasi&mn=$informasi[submenu_informasi]';
			</script>";
		}else{
			echo "<script>
			alert('data gagal disimpan');
			</script>";
		}
		}else{
			echo "<script>
			alert('data gagal disimpan Format Harus JPG/PNG');
			document.location.href='index.php?halaman=Edit_menu_informasi&id=$informasi[id_informasi]&menu=Informasi&mn=$informasi[submenu_informasi]';
			</script>";
		}
	}
	if(isset($_POST['hapus_gambar'])){
		
		$masuk=mysqli_query($host1,"UPDATE tbl_informasi SET  gambar_menu_informasi='gambar.jpg' where id_informasi='$id'");
		if($masuk){
			$lokasi=$informasi['gambar_menu_informasi'];
			// alamat tempat gambar
			$hapus_gambar="../dist/img/informasi/$lokasi";
			// script delete gambar dari folder
			unlink($hapus_gambar);
			echo "<script>
			alert('foto berhasil dihapus');
			document.location.href='index.php?halaman=Edit_menu_informasi&id=$informasi[id_informasi]&menu=Informasi&mn=$informasi[submenu_informasi]';
			</script>";
		}else{
			echo "<script>
			alert('data gagal dihapus');
			</script>";
		}
	}
?>
