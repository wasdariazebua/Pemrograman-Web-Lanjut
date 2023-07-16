<HTML>
    <HEAD>
        <TITLE>Contoh foreach</TITLE>
    </HEAD>
    <BODY>
       
       <?php
          $gado_gado[0] = "Suzuki";
          $gado_gado[1] = "Honda";
          $gado_gado["FORD"] = "USA";
          $gado_gado["KIA"] = "Korea Selatan";
          $gado_gado["cc"] = 1600;

          foreach($gado_gado as $elemen)
            print ($elemen . "<BR>\n");
    ?>
    </BODY>
</HTML>