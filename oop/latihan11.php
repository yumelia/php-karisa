<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h2>Rapot Siswa</h2>
        <form action="lattt11.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="" style="width: 170px;">
                            <option value="RPL">Rekasa Perangkat Lunak</option>
                            <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                            <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table>
                <h3>Nilai Matematika</h3>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas" id=""></td>
                </tr>
            </table>
            <table>
                <h3>Nilai Bahasa Indonesia</h3>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas2" id=""></td>
                </tr>
            </table>
            <table>
                <h3>Nilai Bahasa Inggris</h3>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas3" id=""></td>
                </tr>
            </table>
            <table>
                <h3>Nilai Produktif</h3>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian4" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas4" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts4" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas4" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="proses"></td>
                </tr>
            </table>

        </form>
    </center>
</body>

</html>