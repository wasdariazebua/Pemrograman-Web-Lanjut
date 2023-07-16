<html>
<head>
<title>Contoh if-else</title>
</head>
<body>
<?php
    $kode_hari = date("w");
    if ($kode_hari == 0)
        print("Hari ini hari minggu");
    else 
        print("Hari ini BUKAN hari minggu");
?>
</body>
</html>