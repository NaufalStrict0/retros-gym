<?php
	$my['host']	= "sql209.epizy.com";
	$my['user']	= "epiz_34343403";
	$my['pass']	= "AxiLlGVjzKn";
	$my['dbs']	= "epiz_34343403_retrosgym"; //nama database anda
	$koneksi	= mysqli_connect($my['host'], $my['user'], $my['pass']);
	if (! $koneksi) {
	  echo "Koneksi Gagal!"; mysqli_error();
	}
	mysqli_select_db($koneksi, $my['dbs'])
		 or die ("Database nggak ada tuh".mysqli_error());
?>