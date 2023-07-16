<html>
<head>
<title>Contoh break</title>
</head>
<body>
<?php
    for ($i = 0; $i <= 20; $i += 2) {
        if ($i ==10)
            break;

        print("$i<BR>\n");        
    }
?>
</body>
</html>