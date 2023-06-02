<?php

include "config/koneksi.php";
$pesan = "Proses edit berhasil";
$id = $_GET['id'];
$password = $_POST['password'];
$tglPerpanjang= $_POST['tgl_perpanjang'];

$insert = mysqli_query($koneksi, "
		UPDATE member set password = '$password', tgl_perpanjang_member = '$tglPerpanjang' where member_id = '$id'
	");	
	if($insert){
	    echo "<script>alert('$pesan');window.location.href='index.php?p=datamember'</script>";
	} //akhir if insert
	else{
	    echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}




?>