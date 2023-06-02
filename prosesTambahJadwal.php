<?php

include "config/koneksi.php";

$pesan = "Proses simpan berhasil";
$id = $_POST['member_id'];
$tanggal = $_POST['tgl_latihan'];
$waktu = $_POST['wkt_latihan'];
$jenisLatihan = $_POST['jenis_latihan'];
$pt = $_POST['nama_pt'];

	$insert = mysqli_query($koneksi, "
		INSERT INTO jadwal_latihan (member_id,tanggal_latihan,waktu_latihan,jenis_latihan,nama_pt)
		VALUES ('$id','$tanggal','$waktu', '$jenisLatihan', '$pt')
	");	
	if($insert){
	    echo "<script>alert('$pesan');window.location.href='index.php?p=datajadwal'</script>";
	} //akhir if insert
	else{
	    echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}



/*
$insert = mysqli_query($mysqli,"insert into barang set namabarang='$namabarang', jenisbarang='$jenisbarang', hargamodal='$hargamodal', hargajual='$hargajual', stock='$stock'  ");
*/


?>