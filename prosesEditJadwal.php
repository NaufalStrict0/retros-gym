<?php

include "config/koneksi.php";
$pesan = "Proses edit berhasil";
$id = $_GET['id'];
$password = $_POST['tgl_latihan'];
$tglPerpanjang= $_POST['wkt_latihan'];

$insert = mysqli_query($koneksi, "
		UPDATE jadwal_latihan set tanggal_latihan = '$password', waktu_latihan = '$tglPerpanjang' where jadwal_latihan_id = '$id'
	");	
	if($insert){
	    echo "<script>alert('$pesan');window.location.href='index.php?p=datajadwal'</script>";
	} //akhir if insert
	else{
	    echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}




?>