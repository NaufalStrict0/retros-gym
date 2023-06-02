<?php
	include 'config/koneksi.php';
		// $memberId = $_POST["memberId"];
		$tanggal = $_POST["waktuKunjungan"];
        $memberId = $_POST["member_id"];
    if($tanggal != '' && $memberId != ''){
        $sql = mysqli_query($conn, "INSERT INTO kunjungan_member (member_id, waktu_kunjungan)
        VALUES ('$memberId','$tanggal')");
    }
    if($sql) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
	mysqli_close($conn);			
?>