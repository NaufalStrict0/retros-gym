<?php
	function tgl_indo($tanggal){
	  $bulan = array (
	  	1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
	  		 "Juli", "Agustus", "September", "Oktober", "November", "Desember"
	  );
	  $pecahkan = explode("-", $tanggal);
	  $pecahkan2=explode(" ", $pecahkan[2]);
	  return $pecahkan2[0] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
	} //akhir function tgl_indo

	function tgl_indo_singkat($tanggal){
	  $bulan = array (
	  	1 => "JAN", "FEB", "MAR", "APR", "MEI", "JUN",
	  		 "JUL", "AGU", "SEP", "OKT", "NOV", "DES"
	  );
	  $pecahkan = explode("-", $tanggal);
	  $pecahkan2=explode(" ", $pecahkan[2]);
	  return $pecahkan2[0] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
	}

	function rupiah($angka){  	  
	  $hasil_rupiah = "Rp " . number_format($angka,0,',','.'); //Rp 100.000
	  return $hasil_rupiah; 
	}//akhir fungsi rupiah

	function fungsi_waktu($tanggal){
		$splits = explode(" ", $tanggal);
		$splits2 = explode(":", $splits[1]);
		return $splits2[0].":".$splits2[1];
	}
	function fungsi_waktu1($tanggal){
		$splits = explode(":", $tanggal);
		return $splits[0].":".$splits[1];
	}
?>