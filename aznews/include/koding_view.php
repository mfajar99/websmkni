<?php
   if($m=="profil"){
      $query_data_profil=mysqli_query($host1, "select *from tbl_profil where id_profil=$idmn");
      $data_profil=mysqli_fetch_array($query_data_profil);
      $nama_menu=$data_profil['submenu_profil'];
      $isi=html_entity_decode(htmlspecialchars_decode( $data_profil['isi_profil']));
      $gambar_menu=$data_profil['gambar_menu_profil'];
      $judul=$data_profil['judul_profil'];
      $gambar_share="https://fkubpamekasan.com/login/dist/img/organisasi/$organisasi[logo_organisasi]";
      $deskripsi=substr(strip_tags($isi), 0, 30);;
   }elseif($m=="informasi"){
      $query_data_informasi=mysqli_query($host1, "select *from tbl_informasi where id_informasi=$idmn");
      $data_informasi=mysqli_fetch_array($query_data_informasi);
      $nama_menu=$data_informasi['submenu_informasi'];
      $isi=html_entity_decode(htmlspecialchars_decode($data_informasi['isi_informasi']));
      $judul=$data_informasi['judul_informasi'];
      $gambar_menu=$data_informasi['gambar_menu_informasi'];
      $gambar_share="https://fkubpamekasan.com/login/dist/img/organisasi/$organisasi[logo_organisasi]";
      $deskripsi=substr(strip_tags($isi), 0, 30);;
   }elseif($m=="program"){
      $query_data_program=mysqli_query($host1, "select *from tbl_program where id_program=$idmn");
      $data_program=mysqli_fetch_array($query_data_program);
      $nama_menu=$data_program['submenu_program'];
      $isi=html_entity_decode(htmlspecialchars_decode($data_program['isi_program']));
      $judul=$data_program['judul_program'];
      $gambar_menu=$data_program['gambar_menu_program'];
      $gambar_share="https://fkubpamekasan.com/login/dist/img/organisasi/$organisasi[logo_organisasi]";
      $deskripsi=substr(strip_tags($isi), 0, 30);
   }elseif($m=="berita"){
      $query_data_berita=mysqli_query($host1, "select *from tbl_berita");
      $judul="Berita";
   }elseif($m=="detail_berita"){
      $query_data_berita=mysqli_query($host1, "select *from tbl_berita where id_berita=$idmn");
      $detail_berita=mysqli_fetch_array($query_data_berita);
      $menu=$detail_berita['judul_berita'];
      $judul=$detail_berita['judul_berita'];
      $isi=html_entity_decode(htmlspecialchars_decode($detail_berita['isi_berita']));
      $gambar_share="https://fkubpamekasan.com/login/dist/img/berita/$detail_berita[gambar_berita]";
      $deskripsi=substr(strip_tags($isi), 0, 30);
   }elseif($m=="katagori"){
      $data_berita=mysqli_fetch_array($query_berita);
      $judul_berita=$data_berita['judul_berita'];
      $judul="Berita";
      $isi_berita=html_entity_decode(htmlspecialchars_decode($data_berita['isi_berita']));
      $tanggal_berita=$data_berita['tgl_berita'];
      $menu="KATAGORI";
      $query_data_katagori=mysqli_query($host1, "select *from tbl_katagori where id_katagori=$idmn");
      $data_katagori=mysqli_fetch_array($query_data_katagori);
      $nama_menu=$data_katagori['nama_katagori'];
   }elseif($m=="foto"){
      $judul="Foto";
      $menu="FOTO";
   }else{
      $judul="Home";
   }
?>