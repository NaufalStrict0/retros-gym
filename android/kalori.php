<?php 
include 'config/koneksi.php';
if($_SERVER['REQUEST_METHOD']=='POST'&&$_POST["aksi"]=="cekKalori"){
    $json_response = array();
    $qCekJadwal = mysqli_query($conn, "SELECT * FROM kalori ORDER BY tanggal_hitung DESC LIMIT 1") or die(mysqli_error($conn));
    if(mysqli_num_rows($qCekJadwal) > 0){
        while($row = mysqli_fetch_array($qCekJadwal)){
            $json_response[] = $row;
        }
        echo json_encode(array('resCekKalori'=>$json_response, 'hasil'=>true, 'pesan'=>'OK'));
    } else {
        $response['hasil'] = false;
        $response['pesan'] = "Maaf, tidak ada data...";
        echo json_encode($response);
    }  
}else {
     $response['hasil']= false ;
     $response['pesan']="Ada kesalahan, mohon hubungi administrator sistem";
    echo json_encode($response);
   }
  mysqli_close($conn);
?>