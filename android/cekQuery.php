<?php

include 'config/koneksi.php';

$dateString = "2023-4-8";
$dateTime = DateTime::createFromFormat("Y-n-j", $dateString);
$formattedDate = $dateTime->format("Y-m-d");
$query = "SELECT * FROM jadwallatihan where tanggal_latihan = '$dateString'";

$result = $conn->query($query);
$data_barang = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data_barang);
?>