<?php

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