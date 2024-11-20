<?php

function biodata($nama,$tpt_lahir,$tgl_lahir,$js,$agama,$alamat,$hobi){

    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tpt_lahir<br>";
    echo "Tanggal Lahir : $tgl_lahir<br>";
    echo "Jenis Kelamin : $js<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $alamat<br>";
    echo "Hobi : $hobi<br>";

}

biodata("Karrisa","Bandung","2008-09-20","perempuan","islam","sekeandur","baca au");
echo"<br>";

function menghitung($angka1,$angka2){
    echo "Bilangan ke 1 : $angka1 <br>";
    echo "Bilangan ke 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2;
    echo"Hasilnya : $hasil";
}

menghitung(10,20);

?>