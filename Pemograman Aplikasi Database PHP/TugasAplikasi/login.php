<?php
include("koneksi.php");
if (isset($_POST['button'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $querylogin = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    if ($datalogin = mysqli_fetch_array($querylogin)) {
        session_start();
        $_SESSION['userlogin'] = $datalogin['username'];
        $_SESSION['password'] = $datalogin['password'];
        header("location: admin.php");
        exit();
    } else {
        header("location: login.php?pesan=Login Gagal");
        exit();
    }
}
?>
<!DOCTYPE html>
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
            <td height="50" bgcolor="#FFFFFF"><span class="style1">SPK - Praktikum</span></td>
        </tr>
        <tr>
            <td height="50" bgcolor="#FFFFFF"><span class="style2"><a href="index.php">Home</a> | <a
                        href="laporan.php">Laporan</a> | <a href="login.php">Login</a></span></td>
        </tr>
        <tr>
            <td heigh="35" bgcolor="#FFFFFF"><span class="style2"><a href="index.php">Home</a> | <a
                        href="laporan.php">Laporan</a> | <a href="login.php">Login</a></span></td>
        </tr>
        <tr>
            <td align="center" valign="top" bgcolor="#FF0000"><br />
                <strong>Login</strong><br />
                <br />
                <form id="form1" name="form1" method="post" action="">
                    <table width="300" border="0" cellpadding="" cellspacing="1" bgcolor="#000099">
                        <tr>
                            <td bgcolor="#FFFFFF">Username</td>
                            <td bgcolor="#FFFFFF"><input type="text" name="username" id="username" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">Password</td>
                            <td bgcolor="#FFFFFF"><input type="password" name="password" id="password" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Login" /></td>
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