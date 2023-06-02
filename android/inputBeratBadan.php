<?php
	include 'config/koneksi.php';
		$kalori = $_POST["beratBadan"];
		$tanggal = $_POST["tanggal"];
        $MemberId = $_POST["member_id"];
    if($kalori != '' && $tanggal != ''){
        $sql = mysqli_query($conn, "INSERT INTO data_berat_badan (member_id,tanggal_input_berat_badan,berat_badan)
        VALUES ('$MemberId','$tanggal', '$kalori')");
    }
    if($sql) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
	mysqli_close($conn);			
?>