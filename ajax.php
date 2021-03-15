<?php
include "koneksi.php";
$db = new database();

$nis = $_GET['nis'];

$query = mysqli_query($db, "select * from anggota where nis='$nis'");
$anggota = mysqli_fetch_array($query);
$data = array(
    'nama' =>$anggota['nama'],
);
echo json_encode($data);
?>