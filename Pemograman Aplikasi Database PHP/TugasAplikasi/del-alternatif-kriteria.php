<?php
session_start();
include("koneksi.php");
if (empty($_SESSION['userlogin'])) {
	header("location:login.php?pesan=Belum Login");
	exit;
}

$id_alternatif_kriteria = $_GET['id_alternatif_kriteria'];

$query = "DELETE FROM alternatif_kriteria WHERE id_alternatif_kriteria = '$id_alternatif_kriteria'";
mysqli_query($koneksi, $query);

header("location: alternatif-kriteria.php");
exit;
?>