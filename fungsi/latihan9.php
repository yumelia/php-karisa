<?php

function persegi($sisi){

    echo "<b>Menghitung Persegi</b><br>";
    echo "Sisi persegi : $sisi <br>";
    $hasil = $sisi * $sisi;
    echo "Hasil : $hasil";
}

function persegi_p($panjang,$lebar){

    echo "<b>Menghitung Luas Persegi Panjang</b><br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    $hasil = $panjang * $lebar;
    echo "Hasil : $hasil";

}
function segitiga($alas,$tinggi){

    echo "<b>Menghitung Segitiga</b><br>";
    echo"Alas : $alas <br>";
    echo"Tinggi : $tinggi <br>";
    $hasil = 1/2 * $alas * $tinggi;
    echo "Hasil : $hasil";
}

function lingkaran($jari){

    echo "<b>Menghitung Lingkaran</b><br>";
    echo"Jari-jari : $jari <br>";
    $hasil = 3.14 * $jari;
    echo "Hasil : $hasil";
}


persegi(35);
echo"<hr>";
persegi_p(30,10);
echo"<hr>";
segitiga(15,20);
echo"<hr>";
lingkaran(5);
echo"<hr>";

?>