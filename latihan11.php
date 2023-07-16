<html>
<head>
<title>Menentukan Nama Hari</title>
</head>
<body>

Hari ini:
<?php
   $kode_hari = date("w");
   switch($kode_hari) {
    case 0:
        print("Minggu");
        break;    
    case 1:
        print("Senin");
        break;    
    case 2:
        print("Selasa");
        break;    
    case 3:
        print("Rabu");
        break;    
    case 4:
        print("Kamis");
        break;    
    case 5:
        print("Jumat");
        break;    
    case 6:
        print("Sabtu");
        break;    
   }
?>
</body>
</html>