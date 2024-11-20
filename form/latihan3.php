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
                 <img src="logo smk.png" width="200" alt="">
                 <h2>FORM BIODATA DIRI</h2>

                 <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                 </tr>
                 <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                 </tr>
                 <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value=""></td>
                 </tr>
                 <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jenis_kelamin" value="jk">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="jk">Perempuan
                </td>
                 </tr>
                 <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" value=""></textarea>
                 </tr>
                 <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Budha">Budha</option>
                    </select></td>
                 </tr>
                 <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan_terakhir" id="">
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="smk">SMK</option>
                        <option value="kuliah">KULIAH</option>
                    </select></td>
                 </tr>
                 <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status" id="">
                        <option value="">Sudah Menikah</option>
                        <option value="">Belum Menikah</option>
                        <option value="">Janda</option>
                        <option value="">Duda</option>
                    </select></td>
                 </tr>
                 <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                    <input type="checkbox" name="hobi" value="membaca">Membaca
                    <input type="checkbox" name="hobi" value="menulis">Menulis
                    <input type="checkbox" name="hobi" value="ngepush">Ngepush

                </td>
                 </tr>
                 <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><select name="cita_cita" id="">
                        <option value="programmer">Programmer</option>
                        <option value="develovment">Develovment</option>
                        <option value="dokter">Dokter</option>
                        <option value="perawat">Perawat</option>
                        <option value="pilot">Pilot</option>
                        <option value="chef">Chef</option>
                    </select></td>
                 </tr>
                 <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="ktt_bijak" value=""></textarea>
                 </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="KIRIM" id=""></td>
                 </tr>

            </table>
        </form>
    </center>
</body>
</html>

<hr color="black" size="6">
<br>

<center>
<?php
if(isset($_POST['kirim'])){

$nama1 = $_POST['nama'];
$tempat_lahir1 = $_POST['tempat_lahir'];
$tanggal_lahir1 = $_POST['tanggal_lahir'];
$alamat1 = $_POST['alamat'];
$agama1 = $_POST['agama'];
$pendidikan_terakhir1 = $_POST['pendidikan_terakhir'];
$hobi1 = $_POST['hobi'];
$cita_cita1 = $_POST['cita_cita'];
$ktt_bijak1 = $_POST['ktt_bijak'];

echo"Nama : $nama1 <br>";
echo"Tempat Lahir : $tempat_lahir1 <br>";
echo"Tanggal Lahir : $tanggal_lahir1 <br>";
echo"Alamat : $alamat1 <br>";
echo"Agama : $agama1 <br>";
echo"Pendidikan Terakhir : $pendidikan_terakhir1 <br>";
echo"Hobi : $hobi1 <br>";
echo"Cita-Cita : $cita_cita1 <br>";
echo"Kata-Kata Bijak : $ktt_bijak1 <br>";

}
?>
</center>