<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
               </tr>
               <td></td>
               <td></td>
               <td><input type="submit" name="proses" value="Simpan"></td>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['proses'])){

    $nama_lengkap2 = $_POST['nama_lengkap'];
    $kelas2 = $_POST['kelas'];

    echo"Nama Lengkap : $nama_lengkap2 <br>";
    echo"Kelas : $kelas2";
}
?>
