<HTML>
    <HEAD>
        <TITLE>Contoh Konstanta Simbolis</TITLE>
    </HEAD>
    <BODY>
        <?php
            define("PHI", 3.14);
            
            $jari_jari = 10;
            $keliling = 2 * PHI * $jari_jari;

            printf("PHI = %s<BR>\n", PHI);
            printf("keliling = %s <BR>\n", $keliling);
        ?>
    </BODY>
</HTML>