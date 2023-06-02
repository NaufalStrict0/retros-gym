<?php
    session_start();
    include "header.php";
?>
    <!-- Main content -->
    <section class="content">
    <?php

        error_reporting(0);

        $page = $_GET['p'];

        if($page=="home"){
            include "home.php";
        }else if($page=="register"){
            include "register.php";
        }else if($page=="login"){
            include "login.php";
        }else if($page=="tambahbarang"){
            include "tambahbarang.php";
        }else if($page=="databarang"){
            include "databarang.php";
        }else if($page=="editbarang"){
            include "editbarang.php";
        }else if($page=="datareview"){
            include "datareview.php";
        }else if($page=="datapelanggan"){
            include "datapelanggan.php";
        }
        else if($page=="editpelanggan"){
            include "editpelanggan.php";
        }
        else if($page=="editinstitusi"){
            include "editinstitusi.php";
        }
        else if($page=="tambahpromo"){
            include "tambahpromo.php";
        }
        else if($page=="datapromo"){
            include "datapromo.php";
        }
        else if($page=="editpromo"){
            include "editpromo.php";
        }

        else if($page=="datapemesanan"){
            include "datapemesanan.php";
        }
        else if($page=="editpemesanan"){
            include "editpemesanan.php";
        }
        else if($page=="tambahmember"){
            include "tambahMember.php";
        }     
        else if($page=="datamember"){
            include "dataMember.php";
        } 
        else if($page=="editmember"){
            include "editMember.php";
        }   
        else if($page=="datajadwal"){
            include "datajadwal.php";
        }  
        else if($page=="editjadwal"){
            include "editjadwal.php";
        }
        else if($page=="tambahjadwal"){
            include "tambahJadwal.php";
        }
        else if($page=="datakunjungan"){
            include "dataKunjunganMember.php";
        }                
        else{
            //include 'datapenjualan.php'; //Agar statistiknya gak tampil, gak usah tampilkan aja dan ganti data penjualan
        }
        
    ?>
</section>
<?php
    include "footer.php";
?>