<?php

echo "<center>~~~~~RESTORAN SELALU RAME~~~~~~</center>";
echo "<hr>";


$nama = "Karrisa Yumelia";
$Jenis_Kelamin = "Perempuan";
$jenis = "Makanan";
$menu = "Nasi Goreng";
$jumlah = "1";


if($jenis == "Makanan"){

    if($menu == "Nasi Goreng"){
        $harga = 10000;
        $total = $jumlah * $harga;

    }elseif($menu == "Mie Goreng"){
        $harga = 15000;

    }elseif($menu == "Ayam Goreng"){
        $harga = 20000;
    }else{
        echo"Menu tidak ada";
    }

    echo"Nama : $nama <br>";
    echo"Jenis kelamin : $Jenis_Kelamin <br>";
    echo"Jenis : $jenis <br>";
    echo"Menu : $menu <br>";
    echo"Jumlah : $jumlah <br>";
    echo"========================<br>";

    if ($total >=50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"Total : $total<br>
        Diskon : $diskon<br>
        bayar : $bayar<br>
        ";
    }else {
        echo "Total : $total";
    }

}elseif($jenis == "Minuman"){

    echo"Jenis : $jenis <br>";

    if($menu == "Air Mineral"){
        echo"Menu : $menu";
        $harga = 5000;

    }elseif($menu == "Fresh Tea"){
        echo"Menu : $menu <br>";
        $harga = 7000;
        echo"Harga : $harga <br>";
        
        echo"Jumlah : $jumlah <br>";
        echo"<hr>";

        $total = $harga * $jumlah;
        echo "Total : $total <br>";

        $diskonn = $total * 0.20;
        echo"Diskon 20% : $diskonn";
        echo"<hr>";

        $total_bayar = $total - $diskonn;
        echo"Total bayar : $total_bayar";

    }elseif($menu == "Jus"){
        echo"Menu : $menu";
        $harga = 12000;
    }else{
        echo"Menu tidak ada";
    }
}else{
    echo"Jenis Tidak Ada";
}
?>
