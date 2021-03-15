<?php

	include "koneksi.php";
	$db = new database();
	
	$aksi = $_GET['aksi'];
		if($aksi == "tambah_kembali"){
			$db->input_kembali($_POST['idpinjam'],$_POST['idpinjam'],$_POST['nama'],$_POST['nobuku'],$_POST['denda']);
				header("location:kembali.php");
		}else if($aksi == "hapus_kembali"){
			$db->hapus_kembali($_GET['idkembali']);
				header("location:kembali.php");
		}else if($aksi == "cek_nama"){
			$db->cek_nama($_POST['nama']);
		}
?>