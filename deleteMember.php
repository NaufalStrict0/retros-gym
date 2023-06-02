<?php
include "config/koneksi.php";

$id = $_GET['id'];

//$delete = mysqli_query($mysqli, "delete from barang where idBarang='$id' ");
$delete = mysqli_query($koneksi, "DELETE FROM member WHERE member_id ='".$id."' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='index.php?p=datamember'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>