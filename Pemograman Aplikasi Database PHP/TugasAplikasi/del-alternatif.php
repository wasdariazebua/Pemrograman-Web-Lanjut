<?php
session_start();
include('koneksi.php');
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}
$conn = mysqli_connect("localhost", "root", "", "dbpraktikum");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_alternatif = $_GET['id_alternatif'];
$query = "DELETE FROM alternatif WHERE id_alternatif = '$id_alternatif'";
if (mysqli_query($conn, $query)) {
    header("location:alternatif.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>