<?php

class ppdb{
    public function data_diri($jurusan,$nama,$jk,$tl,$tgl_lahir,$nomor_hps,$email){

        echo "<h3>Data Diri Calon Pendaftar</h3>";
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir : $tl <br>";
        echo "Tanggal Lahir : $tgl_lahir <br>";
        echo "Nomor HP siswa yang bisa dihubungi: $nomor_hps <br>";
        echo "Email : $email <br>";
    }
    public function acp($provinsi,$kako,$kec,$alamat,$kode_pos){

        echo "<h3>Alamat Calon Pendaftar </h3>";
        echo "Provinsi: $provinsi <br>";
        echo "Kab/Kota : $kako <br>";
        echo "Kecamatan : $kec <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode_pos <br>";
    }
    public function data_asal($nas,$as){

        echo "<h3>Data Asal Sekolah </h3>";
        echo "Nama Asal Sekolah : $nas <br>";
        echo "Alamat Sekolah : $as <br>";
    }
    public function data_ortu($nama_ortu,$pekerjaan,$no_hp,$al_lengkap){

        echo "<h3> Data Orang Tua </h3>";
        echo "Nama Lengkap Ayah/Ibu/Wali : $nama_ortu <br>";
        echo "Pekerjaan Ayah/Ibu/Wali : $pekerjaan <br>";
        echo "Nomor HP yang bisa dihubungi : $no_hp <br>";
        echo "Alamat Lengkap : $al_lengkap <br>";
    }
}

$cetak = new ppdb();

echo $cetak->data_diri("RPL","Karrisa","Perempuan","Bandung","20-09-2008","098745634","kar@gmai.com");
echo "<br>";
echo "<hr>";
echo $cetak->acp("Jawa Barat","Bandung","Dayeuhkolot","Sekeandur","JL Palasari","98762");
echo "<br>";
echo "<hr>";
echo $cetak->data_asal("SMPN dua Dayeuhkolot","JL Cibogo");
echo "<br>";
echo "<hr>";
echo $cetak->data_ortu("Ira","Pekerja","Dayeuhkolot","Sekeandur","JL Palasari");
echo "<br>";
echo "<hr>";

?>