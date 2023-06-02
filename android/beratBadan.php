<?php 
include 'config/koneksi.php';
// include 'config/fungsi.php';
$json_response = array();
$qCekJadwal = mysqli_query($conn, "SELECT * FROM data_berat_badan ORDER BY tanggal_input_berat_badan DESC LIMIT 4");
    if(mysqli_num_rows($qCekJadwal) > 0){
        while($row = mysqli_fetch_array($qCekJadwal)){
          // $row['tanggal_input_berat_badan'] = fungsi_pisah($row['tanggal_input_berat_badan']);
            $json_response[] = $row;
            // sort($json_response);
        }
        echo json_encode($json_response);
    }
  mysqli_close($conn);
?>