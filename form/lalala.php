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

<br

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

        echo "<center>";
        echo "<h2>Hasil Nilai</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><td>Nama</td><td>:</td><td>$nama1</td></tr>";
        echo "<tr><td>Kelas</td><td>:</td><td>$kelas1</td></tr>";
        echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan1</td></tr>";
        echo "<tr><td>Nilai B. Indonesia</td><td>:</td><td>$nilai_bindo1</td></tr>";
        echo "<tr><td>Nilai Inggris</td><td>:</td><td>$nilai_inggris1</td></tr>";
        echo "<tr><td>Nilai Matematika</td><td>:</td><td>$nilai_mtk1</td></tr>";
        echo "<tr><td>Nilai Produktif</td><td>:</td><td>$nilai_produktif1</td></tr>";
        echo "<tr><td>Rata-rata</td><td>:</td><td>$hasil</td></tr>";
        
        $hasil_akhir = $hasil > 75 ? "Tuntas" : "Belum Tuntas";
        echo "<tr><td>Status</td><td>:</td><td>$hasil_akhir</td></tr>";
        echo "</table>";
    }
?>

</center>

<?php
$no = isset($_POST['no']) ? $_POST['no'] : '';               // Cek apakah 'no' ada
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';         // Cek apakah 'nama' ada
$unit = isset($_POST['unit']) ? $_POST['unit'] : '';         // Cek apakah 'unit' ada
$tanggal_gj = isset($_POST['tanggal_gj']) ? $_POST['tanggal_gj'] : ''; // Cek apakah 'tanggal_gj' ada
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : ''; // Cek apakah 'jabatan' ada
$lk = isset($_POST['lk']) ? $_POST['lk'] : '';               // Cek apakah 'lk' ada
$sk = isset($_POST['sk']) ? $_POST['sk'] : '';               // Cek apakah 'sk' ada
$bpjs = isset($_POST['bpjs']) ? $_POST['bpjs'] : '';         // Cek apakah 'bpjs' ada
$pinjaman = isset($_POST['pinjaman']) ? $_POST['pinjaman'] : ''; // Cek apakah 'pinjaman' ada
$tabungan = isset($_POST['tabungan']) ? $_POST['tabungan'] : ''; // Cek apakah 'tabungan' ada
$lainnya = isset($_POST['lainnya']) ? $_POST['lainnya'] : '';   // Cek apakah 'lainnya' ada
?>

$no1 = $_POST['no'];
$nama1 = $_POST['nama'];
$unit1 = $_POST['unit'];
$tanggal1 = $_POST['tanggal_gj'];
$jabatan1 = $_POST['jabatan'];
$lamak1 = $_POST['lk'];
$status = $_POST['sk'];
$bpjs1 = $_POST['bpjs'];
$pinjaman1 = $_POST['pinjaman'];
$tabungan1 = $_POST['tabungan'];
$lainnya1 = $_POST['lainnya'];