<?php

// buat class
class kucing{

    // buat property / atribut
    var $warna;
    var $jenis;

    // method / function
    public function makan(){

        echo "Kucing suka makan wishkas";
    }
    public function minum(){

        echo "Kucing suka minum Air";
    }
}
// buat objek
$cetak = new kucing(); //instansiasi

//memanggil method
echo $cetak->makan();
echo"<br>";
echo $cetak->minum();
echo "<br>";

// memanggil property
echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Anggora";

?>