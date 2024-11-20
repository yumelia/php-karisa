<?php

$nama = "Iqbaal Ramdan";
echo"Nama : $nama <br>";
$kelas = "XI RPL 1";
echo"Kelas : $kelas <br>";

$nilai1 = 85;
echo"Nilai B.Indonesia : $nilai1 <br>";
$nilai2 = 72;
echo"Nilai B.Inggris : $nilai2 <br>";
$nilai3 = 88;
echo"Matematika : $nilai3 <br>";
$nilai4 = 90;
echo"Produktif : $nilai4 <br>";

$nilai1 = 80;
$nilai2 = 72;
$nilai3 = 88;
$nilai4 = 90;

$tambah = $nilai1 + $nilai2 + $nilai3 + $nilai4;
$hasil = $tambah / 4;
echo "Rata-rata : $hasil";

echo "<hr>";

$tambah = $hasil >75;

if($tambah == $hasil){
    echo "Status : Anda Lulus";
} else {
    echo "Status : Anda Tidak Lulus";
}
?>