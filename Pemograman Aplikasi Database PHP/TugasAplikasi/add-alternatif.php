<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['userlogin']) || empty($_SESSION['userlogin'])) {
    header("location: login.php?pesan=Belum Login");
    exit;
}
if (isset($_POST['button'])) {
    $nama_alternatif = $_POST['nama_alternatif'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO alternatif(nama_alternatif, deskripsi) VALUES('$nama_alternatif', '$deskripsi')";
    mysqli_query($koneksi, $query);

    header("location:alternatif.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SPK - Praktikum</title>
    <style type="text/css">
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
            font-weight: bold;
        }
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
                <strong>Tambah Data Alternatif</strong><br />
                <br />
                <form id="form1" name="form1" method="post" action="">
                    <table width="450" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                        <tr>
                            <td width="159" bgcolor="#FFFFFF">Nama Alternatif Produk</td>
                            <td width="218" bgcolor="#FFFFFF"><input type="text" name="nama_alternatif"
                                    id="nama_alternatif" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Deskripsi</td>
                            <td bgcolor="#FFFFFF"><textarea name="deskripsi" id="deskripsi" cols="30"
                                    rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td bgcolor=#FFFFFF>&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Simpan" /></td>
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