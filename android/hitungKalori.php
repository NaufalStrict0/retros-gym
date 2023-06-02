<?php
	include 'config/koneksi.php';
		$kalori = $_POST["kalori"];
		$tanggal = $_POST["tanggal"];
        $memberId = $_POST["member_id"];
    if($kalori != '' && $tanggal != ''){
        $sql = mysqli_query($conn, "INSERT INTO kalori (member_id,jumlah_kalori,tanggal_hitung)
        VALUES ('$memberId','$kalori', '$tanggal')");
    }
    if($sql) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
	mysqli_close($conn);			
?>