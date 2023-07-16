<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbpraktikum");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>