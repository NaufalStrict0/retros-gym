<?php
 include 'config/koneksi.php';
if(isset($_POST['noHp']) && isset($_POST['password'])){
    $email = $_POST['noHp'];
    $password = $_POST['password'];
    $qCekJadwal = mysqli_query($conn, "select * from member where no_hp='$email' and password='" . md5($password) . "'") or die(mysqli_error($conn));
    if(mysqli_num_rows($qCekJadwal) > 0){
        while($row = mysqli_fetch_array($qCekJadwal)){
            $json_response[] = $row;
        }
        echo json_encode(array('resMember'=>$json_response, 'hasil'=>true, 'pesan'=>'OK'));
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
?>