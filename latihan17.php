<html>
<head>
<title>Contoh Indeks Campuran</title>
</head>
<body>

<?php
     $gado_gado [0] = "Suzuki";
     $gado_gado [1] = "Honda";
     $gado_gado ["Ford"] = "USA";
     $gado_gado ["KIA"] = "Korea Selatan";
     $gado_gado ["cc"] = 1600;

     print($gado_gado[0] . "<BR>\n");
     print($gado_gado[1] . "<BR>\n");
     print($gado_gado["Ford"]   . "<BR>\n");
     print($gado_gado["KIA"]    . "<BR>\n");
     print($gado_gado["cc"]     . "<BR>\n");
?>

</body>
</html>