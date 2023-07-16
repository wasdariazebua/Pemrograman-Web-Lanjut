<!DOCTYPE html>
<html>
<head>
<title>Program Menampilkan Bilangan Ganjil dan Genap Menggunakan Do-While</title>
</head>
<body>

<?php
    $batas = (int) readline("Masukkan batas bilangan: ");

    echo "Bilangan Ganjil: ";
    $i = 1;
    do {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= $batas);

    echo "<br>Bilangan Genap: ";
    $i = 1;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= $batas);
?>

</body>
</html>