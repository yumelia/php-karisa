<?php
$provinsi = "Jawa Timur";
$kota = "Surabaya";

if($provinsi == "Jawa Barat"){

    if($kota == "Bandung"){
        echo"Selamat Datang Dikota Bandung";
    }elseif($kota == "Cimahi"){
        echo"Selamat Datang Dikota Cimahi";
    }elseif($kota == "Bogor"){
        echo"Selamat Datang Dikota Bogor";
    }elseif($kota == "Bekasi"){
        echo"Selamat Datang Dikota Bekasi";
    }elseif($kota == "Depok"){
        echo"Selamat Datang Dikota Depok";
    }else{
        echo"kota tidak tersedia";
    }

}elseif($provinsi == "Jawa Timur"){

    if($kota == "Surabaya"){
        echo"Selamat Datang Dikota Surabaya";
    }elseif($kota == "Malang"){
        echo"Selamat Datang Dikota Malang";
    }elseif($kota == "Blitar"){
        echo"Selamat Datang Dikota Blitar";
    }elseif($kota == "Madiun"){
        echo"Selamat Datang Dikota Madiun";
    }elseif($kota == "Mojokerto"){
        echo"Selamat Datang Dikota Mojokerto";
    }else{
        echo"kota tidak tersedia";
    }

}elseif($provinsi == "Jawa Tengah"){

    if($kota == "Semarang"){
        echo"Selamat Datang Dikota Semarang";
    }elseif($kota == "Pekalongan"){
        echo"Selamat Datang Dikota Pekalongan";
    }elseif($kota == "Salatiga"){
        echo"Selamat Datang Dikota Salatiga";
    }elseif($kota == "Tegal"){
        echo"Selamat Datang Dikota Tegal";
    }elseif($kota == "Magelang"){
        echo"Selamat Datang Dikota Magelang";
    }else{
        echo"kota tidak tersedia";
    }
}else{
    echo"Provinsi Tidak Ada";
}


?>