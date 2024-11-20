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
            <h2>Nilai Ujian Nasional</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                    <select name="jurusan" id="">
                        <option value="rpl">RPL</option>
                        <option value="tkro">TKRO</option>
                        <option value="tbsm">TBSM</option>
                    </select>
                </td>
                </tr>
                <tr>
                <td><h2>Nilai Ujian</h2></td>
               </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_bindo" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_inggris" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_mtk" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_produktif" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN" id=""></td>
                 </tr>
            </table>
        </form>
    </center>
</body>
</html>

<br>
<center>
<?php

    if(isset($_POST['simpan'])){

    $nama1 = $_POST['nama'];
    $kelas1 = $_POST['kelas'];
    $jurusan1 = $_POST['jurusan'];
    $nilai_bindo1 = $_POST['nilai_bindo'];
    $nilai_inggris1 = $_POST['nilai_inggris'];
    $nilai_mtk1 = $_POST['nilai_mtk'];
    $nilai_produktif1 = $_POST['nilai_produktif'];
    $rata_rata = $nilai_bindo1 + $nilai_inggris1 + $nilai_mtk1 + $nilai_produktif1;
    $hasil = $rata_rata / 4;

    echo"Nama : $nama1 <br>";
    echo"Kelas : $kelas1 <br>";
    echo"Jurusan : $jurusan1 <br>";
    echo"Nilai B.Indonesia : $nilai_bindo1 <br>";
    echo"Nilai Inggris : $nilai_inggris1 <br>";
    echo"Nilai Matematika : $nilai_mtk1 <br>";
    echo"Nilai Produktif : $nilai_produktif1 <br>";
    echo"Rata-rata : $hasil <br>";

    $hasil_akhir = $hasil > 75;

    if($hasil_akhir == $hasil){
        echo "Status : Tuntas";
    } else {
        echo "Status : Belum Tuntas";
    }
    
    }
 ?>
 </center>