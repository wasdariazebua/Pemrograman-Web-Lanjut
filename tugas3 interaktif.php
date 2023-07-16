<!DOCTYPE html>
<html>
<head>
    <title>Program Penjumlahan Dua Bilangan</title>
</head>
<body>
    <h1>Program Penjumlahan Dua Bilangan</h1>

    <form method="post" action="">
        Bilangan 1: <input type="number" name="bilangan1"><br>
        Bilangan 2: <input type="number" name="bilangan2"><br>
        <input type="submit" value="Jumlahkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST["bilangan1"];
        $bilangan2 = $_POST["bilangan2"];
        $hasil = $bilangan1 + $bilangan2;

        echo "<h2>Hasil penjumlahan: " . $hasil . "</h2>";
    }
    ?>
</body>
</html>
