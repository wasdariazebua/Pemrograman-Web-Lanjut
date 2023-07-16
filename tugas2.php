<!DOCTYPE html>
<html>
<head>
    <title>Program Menampilkan Bilangan Ganjil dan Genap</title>
</head>
<body>
    <h1>Program Menampilkan Bilangan Ganjil dan Genap</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="batas">Masukkan batas bilangan:</label>
        <input type="number" id="batas" name="batas">
        <button type="submit">Tampilkan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $batas = (int)$_POST["batas"];

        echo "<h2>Bilangan Maximal: $batas </h2>";
        
        echo "<h2>Hasil:</h2>";

        echo "<p>Bilangan Ganjil:</p>";
        for ($i = 1; $i <= $batas; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }

        echo "<p>Bilangan Genap:</p>";
        for ($i = 1; $i <= $batas; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>
