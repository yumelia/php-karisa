<?php
$nama = "gatau";
$jk = "Perempuan";
$jenis = "Makanan";
$menu = "Nasi Goreng";
$jumlah = 1;

if ($jenis == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
        $total = $jumlah * $harga;
      
        echo"nama : $nama<br>
        Jenis Kelamin: $jk<br>
        Jenis : $jenis<br>
        Menu : $menu<br>
        Harga : $harga<br>
        Jumlah : $jumlah<br>
        ";
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
    }
}
