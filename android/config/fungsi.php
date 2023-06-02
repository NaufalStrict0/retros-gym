<?php
function fungsi_waktu($tanggal){
    $splits = explode(":", $tanggal);
    return $splits[0].":".$splits[1];
}
function fungsi_pisah($tanggal){
    $date = DateTime::createFromFormat("Y-m-d", $tanggal);
    $d = $date->format("d-M-y");
    $pisah = explode("-", $d);
    return $pisah[0]." ".$pisah[1]." ".$pisah[2];
}
?>