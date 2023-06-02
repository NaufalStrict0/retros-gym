<?php
    session_start();
    include "config/koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //$cek = mysqli_query($mysqli,"select * from akun where username='$username' and password='$password' ");
    $cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='".$username."' AND password='".$password."' ");
    if(mysqli_num_rows($cek)>0){
        
        $_SESSION['username'] = "$username";
        echo "<script>window.location.href='index.php'</script>";

    }else{
        echo "<script>alert('username belum terdaftar atau password salah!');window.history.go(-1);</script>";
    }

?>