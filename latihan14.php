<html>
<head>
<title>Contoh continue</title>
</head>
<body>
<?php
   for ($i = 1; $i <= 10; $i++) {
        if ($i == 5)
            continue;

        print("$i <BR>\n");
   }
?>
</body>
</html>