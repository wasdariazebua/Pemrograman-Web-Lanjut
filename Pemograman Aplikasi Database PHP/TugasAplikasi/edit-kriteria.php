<?php
session_start();
include("koneksi.php");

if ($_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}

if (isset($_POST['button'])) {
    // Mendapatkan nilai dari form edit
    $id_kriteria = $_POST['id_kriteria'];
    $nama_kriteria = $_POST['nama_kriteria'];
    $kepentingan = $_POST['kepentingan'];
    $costbenefit = $_POST['costbenefit'];

    // Melakukan query UPDATE
    mysqli_query($koneksi, "UPDATE kriteria SET
        nama_kriteria='$nama_kriteria',
        kepentingan='$kepentingan',
        costbenefit='$costbenefit' WHERE
        id_kriteria='$id_kriteria'");
    header("location:kriteria.php");
}

// Mendapatkan data kriteria dari database
$id_kriteria = $_GET['id_kriteria']; // Mengambil ID Kriteria dari URL
$query_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'");
$datakriteria = mysqli_fetch_array($query_kriteria);

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

        a:link {
            text-decoration: none;
            color: #333333;
        }

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
            font-weight: bold
        }
        -->
    </style>
</head>

<body>
    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000099">
        <tr>
            <td height="50" bgcolor="#FFFFFF"><span>SPK - Pratikum</span></td>
        </tr>
        <tr>
            <td height="35" bgcolor="#FFFFFF"><span class="style2"><a href="admin.php">Home</a> | <a
                        href="alternatif.php">Alternatif</a> | <a href="kriteria.php">Kriteria</a> | <a
                        href="alternatif-kriteria.php">Alternatif Kriteria</a> | <a href="ganti-password.php">Ganti
                        Password</a> | <a href="logout.php">Logout</a> | Anda Login Sebagai :
                    <?php echo $_SESSION['userlogin']; ?>
                </span></td>
        </tr>
        <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF"><br />
                <strong>Edit Data Kriteria</strong><br />
                <br />
                <form id="form1" name="form1" method="post" action="">
                    <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                        <tr>
                            <td bgcolor="#FFFFFF">ID Kriteria</td>
                            <td bgcolor="#FFFFFF"><input type="text" name="id_kriteria" id="id_kriteria" readonly
                                    value="<?php echo $datakriteria['id_kriteria']; ?>" /></td>
                        </tr>
                        <tr>
                            <td width="128" bgcolor="#FFFFFF">Nama Kriteria</td>
                            <td width="249" bgcolor="#FFFFFF"><input type="text" name="nama_kriteria" id="nama_kriteria"
                                    value="<?php echo $datakriteria['nama_kriteria']; ?>" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Kepentingan</td>
                            <td bgcolor="#FFFFFF"><input type="text" name="kepentingan" id="kepentingan"
                                    value="<?php echo $datakriteria['kepentingan']; ?>" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Cost Benefit</td>
                            <td bgcolor="#FFFFFF">
                                <select name="costbenefit" id="costbenefit">
                                    <option value=""></option>
                                    <option value="cost" <?php if ($datakriteria['costbenefit'] == 'cost') {
                                        echo "selected";
                                    } ?>>cost</option>
                                    <option value="benefit" <?php if ($datakriteria['costbenefit'] == 'benefit') {
                                        echo "selected";
                                    } ?>>Benefit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Update" /></td>
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