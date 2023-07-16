<?php
session_start();
include("koneksi.php");
if (empty($_SESSION['userlogin'])) {
	header("location:login.php?pesan=Belum Login");
	exit;
}

$id_kriteria = $_GET['id_kriteria'];

$query = "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'";
mysqli_query($koneksi, $query);

header("location: kriteria.php");
exit;
?>