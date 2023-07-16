<html>
<head>
<title>Program Menampilkan Bilangan Ganjil dan Genap Menggunakan Do-While</title>
</head>
<body>

<?php
    echo "Bilangan Ganjil: ";
    $i = 1;
    do {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= 10);

    echo "<br>Bilangan Genap: ";
    $i = 1;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= 10);
?>

</body>
</html>