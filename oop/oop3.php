<?php

class bangun_datar{

    public $luas;
    public $luas2;
    public $luas3;
    public $luas4;

 public function persegi($sisi){

    echo "<b>Menghitung Persegi</b><br>";
    echo "Sisi persegi : $sisi <br>";
    $this->luas = $sisi * $sisi;
    echo "Hasil : $this->luas";
}

public function persegi_p($panjang,$lebar){

    echo "<b>Menghitung Luas Persegi Panjang</b><br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    $this->luas2 = $panjang * $lebar;
    echo "Hasil : $this->luas2";

}
public function segitiga($alas,$tinggi){

    echo "<b>Menghitung Segitiga</b><br>";
    echo"Alas : $alas <br>";
    echo"Tinggi : $tinggi <br>";
    $this->luas3 = 1/2 * $alas * $tinggi;
    echo "Hasil : $this->luas3";
}

 public function lingkaran($jari){

    echo "<b>Menghitung Lingkaran</b><br>";
    echo"Jari-jari : $jari <br>";
    $this->luas4 = 3.14 * $jari;
    echo "Hasil : $this->luas4";
}
}

$cetak = new bangun_datar();

echo $cetak->persegi(35);
echo"<hr>";
echo $cetak->persegi_p(30,10);
echo"<hr>";
echo $cetak->segitiga(15,20);
echo"<hr>";
echo $cetak->lingkaran(5);
echo"<hr>";




?>