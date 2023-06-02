<?php

include "config/koneksi.php";

$pesan = "Proses simpan berhasil";
$namaMember = $_POST['namaMember'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHp'];
$tglDaftar = $_POST['tanggalDaftar'];
$tglHabis = $_POST['tanggalBerlaku'];
$pw = md5($_POST['password']);
$gender = $_POST['gender'];

	$insert = mysqli_query($koneksi, "
		INSERT INTO member (nama_member,no_hp,tgl_daftar_member,tgl_habis_member,password,alamat,tgl_perpanjang_member,gender)
		VALUES ('$namaMember','$noHp', '$tglDaftar', '$tglHabis','$pw','$alamat','$tglDaftar','$gender')
	");	
	if($insert){
	    echo "<script>alert('$pesan');window.location.href='index.php?p=datamember'</script>";
	} //akhir if insert
	else{
	    echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}



/*
$insert = mysqli_query($mysqli,"insert into barang set namabarang='$namabarang', jenisbarang='$jenisbarang', hargamodal='$hargamodal', hargajual='$hargajual', stock='$stock'  ");
*/


?>