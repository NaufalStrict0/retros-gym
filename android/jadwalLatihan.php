<?php 
include 'config/koneksi.php';
include 'config/fungsi.php';
if($_SERVER['REQUEST_METHOD']=='POST'&&$_POST["aksi"]=="cekjadwalLatihan"){
    $id =  $_POST['memberId'];
    $hari= $_POST['tanggal'];
    // $id =  "1";
    // $hari= "2023-05-23";
    $date = DateTime::createFromFormat("Y-m-d", $hari);
    $d = $date->format("Y-m-d");
    $json_response = array();
    date_default_timezone_set("Asia/Jakarta");
    $tanggal=date("Y-m-d h:i:s");
    $qCekJadwal = mysqli_query($conn, "SELECT * FROM jadwal_latihan where member_id = '$id'AND tanggal_latihan = '$d'") or die(mysqli_error($conn));
    if(mysqli_num_rows($qCekJadwal) > 0){
        while($row = mysqli_fetch_array($qCekJadwal)){
            $row['waktu_latihan'] = fungsi_waktu($row['waktu_latihan']);
            $json_response[] = $row;
        }
        echo json_encode(array('resCekJadwalLatihan'=>$json_response, 'hasil'=>true, 'pesan'=>'OK'));
    } else {
        $response['hasil'] = false;
        $response['pesan'] = "Maaf, tidak ada data...";
        echo json_encode($response);
    }
 }  else {
     $response['hasil']= false ;
     $response['pesan']="Ada kesalahan, mohon hubungi administrator sistem";
    echo json_encode($response);
   }
  mysqli_close($conn);
  ?>
  