<?php

// class penggajihan{

//     public $gaji_pokok;
//     public $tunjangan_pddkn;
//     public $total_potongan;
//     public $gaji_bersih;

    
//     public function Gaji_pokok($nama,$jabatan,$gaji_pokok){

//         if($jabatan == "Jabatan"){

//             if($jabatan == "direktur"){
//                 $this->gaji_pokok = 10000000;
        
//             }elseif($jabatan == "manager"){
//                 $this->gaji_pokok = 7500000;
        
//             }elseif($jabatan == "karyawan"){
//                 $this->gaji_pokok = 5000000;

//             }elseif($jabatan == "ob"){
//                 $this->gaji_pokok = 2500000;

//             }else{
//                 $this->gaji_pokok = 0;
//             }

//     }

// }

     
// public function tunjangan($pendidikan,$tunjangan_pddkn){

//     if($tunjangan_pddkn == "Tunjangan"){

//         if($a == "s1"){
//             $this->tunjangan_pddkn = 1000000;
    
//         }elseif($a == "sma"){
//             $this->tunjangan_pddkn = 7500000;
    
//         }elseif($a == "smp"){
//             $this->tunjangan_pddkn = 500000;

//         }elseif($a == "sd"){
//             $this->tunjangan_pddkn = 250000;

//         }else{
//             $this->tunjangan_pddkn = 0;
//         }

// }

// }

// public function potongan($tabungan,$pinjaman){

//         if($tabungan == "tabungan"){
//             $this->tabungan = 2000000;
    
//         }elseif($pinjaman == "pinjaman"){
//             $this->pinjaman = 500000;

//         }else{
//             $this-> 
//         }

//         echo "Tabungan : $this->tabungan";
//         echo "Pinjaman : $this->pinjaman";
//         $this->total_potongan = $tabungan + $pinjaman;
//         echo "Total Potongan : $this->total_potongan";

// }
// public function total_gjp($tgb){

//     echo "Total Gaji Bersih : $tgp = $gaji_pokok + $tunjangan_pddkn - $total_potongan";
// }

// }

// $cetak = new penggajihan();

// echo $cetak->Gaji_pokok("naisa","karyawan",500000);
// echo "<br>";
// echo $cetak->tunjangan("smp","500000");
// echo "<br>";
// echo $cetak->potongan("2000000","500000");
// echo "<br>";
// echo $cetak->total_gjp();
// echo "<br>";


class Penggajihan {
    public $nama;
    public $jabatan;
    public $pendidikan;

    public function hitungGajiPokok($jabatan) {
        if ($jabatan == "direktur") {
            return 10000000;
        } elseif ($jabatan == "manager") {
            return 7500000;
        } elseif ($jabatan == "karyawan") {
            return 5000000;
        } elseif ($jabatan == "ob") {
            return 2500000;
        } else {
            return 0; 
        }
    }

    public function hitungTunjanganPendidikan($pendidikan) {
        if ($pendidikan == "s1") {
            return 1000000;
        } elseif ($pendidikan == "sma") {
            return 750000;
        } elseif ($pendidikan == "smp") {
            return 500000;
        } elseif ($pendidikan == "sd") {
            return 250000;
        } else {
            return 0; 
        }
    }

    public function hitungPotongan() {
        $tabungan = 200000;
        $pinjaman = 50000;
        return $tabungan + $pinjaman;
    }

    public function hitungGajiBersih($gaji_pokok, $tunjangan_pendidikan, $total_potongan) {
        return ($gaji_pokok + $tunjangan_pendidikan) - $total_potongan;
    }

    public function tampilkanSemua($nama, $jabatan, $pendidikan) {
        $gaji_pokok = $this->hitungGajiPokok($jabatan);
        $tunjangan_pendidikan = $this->hitungTunjanganPendidikan($pendidikan);
        $total_potongan = $this->hitungPotongan();
        $gaji_bersih = $this->hitungGajiBersih($gaji_pokok, $tunjangan_pendidikan, $total_potongan);

        echo "<center><h2>Penggajihan Karyawan<h2></center>";
        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan: $nama<br>";
        echo "Jabatan: $jabatan<br>";
        echo "Pendidikan: $pendidikan<br>";
        echo "<hr>";
        echo "<h3>Tunjangan</h3>";
        echo "Gaji Pokok          : Rp. $gaji_pokok<br>";
        echo "Tunjangan Pendidikan: Rp. $tunjangan_pendidikan<br>";
        echo "<hr>";
        echo "<h3>Potongan</h3>";
        echo "Potongan Tabungan   : Rp. 200000<br>";
        echo "Potongan Pinjaman   : Rp. 50000<br>";
        echo "Total Potongan      : Rp. $total_potongan<br>";
        echo "<hr>";
        echo "<h3>Total Gaji Bersih</h3>";
        echo "Gaji Bersih         : Rp. $gaji_bersih<br>";
        echo "<hr>";
    }
}

// Inisialisasi objek Penggajihan
$karyawan = new Penggajihan();

// Tampilkan hasil perhitungan gaji
$karyawan->tampilkanSemua("Keyndra", "manager", "sma");

?>
