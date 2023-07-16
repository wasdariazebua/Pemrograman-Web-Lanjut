<html>
<head>
<title>Contoh continue</title>
</head>
<body>
<?php
    function jumlah ($x, $y) {
        $hasil = $x + $y;

        return $hasil;
    } 

    $z = jumlah(2, 3);

    print($z);
    print("<BR>\n");
    print(jumlah(4, 5));
?>
</body>
</html>