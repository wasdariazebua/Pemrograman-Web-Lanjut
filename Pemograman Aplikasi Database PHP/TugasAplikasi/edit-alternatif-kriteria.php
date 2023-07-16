<?php
session_start();
include("koneksi.php");

if ($_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}

if (isset($_POST['button'])) {
    // Mendapatkan nilai dari form edit
    $id_alternatif_kriteria = $_POST['id_alternatif_kriteria'];
    $id_alternatif = $_POST['id_alternatif'];
    $id_kriteria = $_POST['id_kriteria'];
    $nilai = $_POST['nilai'];

    // Melakukan query UPDATE
    mysqli_query($koneksi, "UPDATE alternatif_kriteria SET
        id_alternatif='$id_alternatif',
        id_kriteria='$id_kriteria',
        nilai='$nilai' WHERE
        id_alternatif_kriteria='$id_alternatif_kriteria'");
    header("location:alternatif-kriteria.php");
    exit;
}

// Mendapatkan data kriteria dari database
$id_alternatif_kriteria = $_GET['id_alternatif_kriteria']; // Mengambil ID Kriteria dari URL
$query_alternatif_kriteria = mysqli_query($koneksi, "SELECT * FROM alternatif_kriteria WHERE id_alternatif_kriteria='$id_alternatif_kriteria'");
$dataalternatifkriteria = mysqli_fetch_array($query_alternatif_kriteria);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SPK - Praktikum</title>
    <style type="text/css">
        <!--
        body,
        td,
        th {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 13px;
            color: #333333;
        }

        .style1 {
            color: #000099;
            font-size: 24px;
        }

        a:link,
        a:visited {
            text-decoration: none;
            color: #333333;
        }

        a:hover {
            text-decoration: underline;
            color: #FF0000;
        }

        a:active {
            text-decoration: none;
            color: #333333;
        }

        .style2 {
            font-weight: bold;
        }
        -->
    </style>
</head>

<body>
    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000099">
        <tr>
            <td height="50" bgcolor="#FFFFFF"><span>SPK - Praktikum</span></td>
        </tr>
        <tr>
            <td height="35" bgcolor="#FFFFFF">
                <span class="style2">
                    <a href="admin.php">Home</a> |
                    <a href="alternatif.php">Alternatif</a> |
                    <a href="kriteria.php">Kriteria</a> |
                    <a href="alternatif-kriteria.php">Alternatif Kriteria</a> |
                    <a href="ganti-password.php">Ganti Password</a> |
                    <a href="logout.php">Logout</a> |
                    Anda Login Sebagai:
                    <?php echo $_SESSION['userlogin']; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF">
                <br />
                <strong>Edit Data Alternatif Kriteria</strong><br />
                <br />
                <form id="form1" name="form1" method="post" action="">
                    <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                        <tr>
                            <td bgcolor="#FFFFFF">ID Alternatif Kriteria</td>
                            <td bgcolor="#FFFFFF">
                                <input type="text" name="id_alternatif_kriteria" id="id_alternatif_kriteria" readonly
                                    value="<?php echo $dataalternatifkriteria['id_alternatif_kriteria']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td width="128" bgcolor="#FFFFFF">ID Alternatif</td>
                            <td width="249" bgcolor="#FFFFFF">
                                <input type="text" name="id_alternatif" id="id_alternatif"
                                    value="<?php echo $dataalternatifkriteria['id_alternatif']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">ID Kriteria</td>
                            <td bgcolor="#FFFFFF">
                                <input type="text" name="id_kriteria" id="id_kriteria"
                                    value="<?php echo $dataalternatifkriteria['id_kriteria']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Nilai</td>
                            <td bgcolor="#FFFFFF">
                                <input type="text" name="nilai" id="nilai"
                                    value="<?php echo $dataalternatifkriteria['nilai']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF">
                                <input type="submit" name="button" id="button" value="Update" />
                            </td>
                        </tr>
                    </table>
                </form>
                <br />
                <br />
            </td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="47%" height="35" align="left"><strong>&copy; 2023</strong></td>
                        <td width="53%" height="35" align="right"><strong><a href="" target="_blank">Kontak</a> | <a
                                    href="" target="_blank">About</a></strong></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>