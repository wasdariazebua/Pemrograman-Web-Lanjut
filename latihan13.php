<html>
<head>
<title>Contoh break</title>
</head>
<body>
<?php
    for ($i = 0; $i <= 10; $i++) {
        if ("$i : ");
        for ($j = 0; $j <= 6; $j++) {
            if ($i == 5)
                break 2;
            print($j);
        }

        print("$i<BR>\n");        
    }
?>
</body>
</html>