<html>
<head>
<title>Contoh Foreach</title>
</head>
<body>
<?php
    $gado_gado [0] = "Suzuki";
    $gado_gado [1] = "Honda";
    $gado_gado ["Ford"] = "USA";
    $gado_gado ["KIA"] = "Korea Selatan";
    $gado_gado ["cc"] = 1600;

    foreach($gado_gado as $indeks => $elemen)
        print("$indeks : $elemen <BR>\n");        
?>
</body>
</html>