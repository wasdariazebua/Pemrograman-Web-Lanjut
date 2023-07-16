<?php
session_start();
include("koneksi.php");
if ($_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_SESSION['userlogin'];
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];

    // Query untuk mengambil password dari database
    $query = mysqli_query($koneksi, "SELECT password FROM login WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);
    $passwordFromDB = $data['password'];

    // Memeriksa kesesuaian password lama yang dimasukkan dengan password di database
    if ($oldPassword == $passwordFromDB) {
        // Melakukan update password baru ke database
        $updateQuery = mysqli_query($koneksi, "UPDATE login SET password='$newPassword' WHERE username='$username'");
        if ($updateQuery) {
            echo "<script>alert('Password berhasil diubah');</script>";
            // Set session password baru
            $_SESSION['password'] = $newPassword;
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengubah password');</script>";
        }
    } else {
        echo "<script>alert('Password lama tidak sesuai');</script>";
    }
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8" />
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
                <strong>Ganti Password</strong><br />
                <br />
                <form method="post" action="">
                    <table width="400" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                        <tr>
                            <td width="150" bgcolor="#FFFFFF">Username</td>
                            <td width="250" bgcolor="#FFFFFF">
                                <?php echo $_SESSION['userlogin']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Password Lama</td>
                            <td bgcolor="#FFFFFF"><input type="password" name="old_password" size="30" maxlength="30"
                                    required /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Password Baru</td>
                            <td bgcolor="#FFFFFF"><input type="password" name="new_password" size="30" maxlength="30"
                                    required /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="submit" value="Simpan" /></td>
                        </tr>
                    </table>
                </form>
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