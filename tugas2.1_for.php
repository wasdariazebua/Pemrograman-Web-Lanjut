<html>
<head>
<title>Program Menampilkan Bilangan Ganjil dan Genap Menggunakan For</title>
</head>
<body>

<?php
    echo "Bilangan Ganjil: ";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }

    echo "<br>Bilangan Genap: ";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
?>

</body>
</html>