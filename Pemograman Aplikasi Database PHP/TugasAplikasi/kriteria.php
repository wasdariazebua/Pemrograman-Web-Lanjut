<?php
session_start();
include("koneksi.php");
if ($_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}
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
                        Password</a> | <a href="logout.php">Logout</a> | Anda Login Sebagai:
                    <?php echo $_SESSION['userlogin']; ?>
                </span></td>
        </tr>
        <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF"><br />
                <strong>Data Kriteria</strong><br />
                <br />
                <table width="700" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                    <tr>
                        <td width="79" bgcolor="#FFFFFF">ID Kriteria</td>
                        <td width="196" bgcolor="#FFFFFF">Nama Kriteria</td>
                        <td width="129" bgcolor="#FFFFFF">Kepentingan</td>
                        <td width="140" bgcolor="#FFFFFF">Cost Benefit</td>
                        <td width="100" bgcolor="#FFFFFF"><a href="add-kriteria.php">Add</a></td>
                    </tr>
                    <?php
                    $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
                    while ($datakriteria = mysqli_fetch_array($querykriteria)) {
                        ?>
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <?php echo $datakriteria['id_kriteria'] ?>
                            </td>
                            <td bgcolor="#FFFFFF">
                                <?php echo $datakriteria['nama_kriteria'] ?>
                            </td>
                            <td bgcolor="#FFFFFF">
                                <?php echo $datakriteria['kepentingan'] ?>
                            </td>
                            <td bgcolor="#FFFFFF">
                                <?php echo $datakriteria['costbenefit'] ?>
                            </td>
                            <td bgcolor="#FFFFFF"><a
                                    href="edit-kriteria.php?id_kriteria=<?php echo $datakriteria['id_kriteria']; ?>">Edit</a>
                                <a href="del-kriteria.php?id_kriteria=<?php echo $datakriteria['id_kriteria']; ?>">Del</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
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