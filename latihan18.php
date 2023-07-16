<html>
<head>
<title>Contoh count pada Array</title>
</head>
<body>

<?php
   $kota[] = "Medan";
   $kota[] = "Jakarta";
   $kota[] = "Bandung";
   $kota[] = "Denpasar";
   $kota[] = "Makassar";

   $jumlah = count($kota);
   for ($i = 0; $i < $jumlah; $i++)
        print("\$kota[$i] : $kota[$i]<BR>\n");

?>

</body>
</html>