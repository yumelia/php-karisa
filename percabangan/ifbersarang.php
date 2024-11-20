<?php

$jurusan = "TKRO";
$kelas = "12 TKRO";

if($jurusan == "RPL"){
    echo"WELCOME TO JURUSAN RPL <br>";

    if($kelas == "10 RPL"){
        echo"Ini kelas 10 RPL";
    }elseif($kelas == "11 RPL"){
        echo"Ini kelas 11 RPL";
    }elseif($kelas == "12 RPL"){
        echo"Ini kelas 12 RPL";
    }else{
        echo"kelas tidak tersedia";
    }
}elseif($jurusan == "TKRO"){
    echo"WELCOME TO JURUSAN TKRO <br>";

    if($kelas == "10 TKRO"){
        echo"Ini kelas 10 TKRO";
    }elseif($kelas == "11 TKRO"){
        echo"Ini kelas 11 TKRO";
    }elseif($kelas == "12 TKRO"){
        echo"Ini kelas 12 TKRO";
    }else{
        echo"kelas tidak tersedia";
    }


}elseif($jurusan == "TBSM"){
    echo"WELCOME TO JURUSAN TBSM <br>";

    if($kelas == "10 TBSM"){
        echo"Ini kelas 10 TBSM";
    }elseif($kelas == "11 TBSM"){
        echo"Ini kelas 11 TBSM";
    }elseif($kelas == "12 TBSM"){
        echo"Ini kelas 12 TBSM";
    }else{
        echo"kelas tidak tersedia";
    }
}else{
    echo"Jurusan Tidak Ada";
}
?>