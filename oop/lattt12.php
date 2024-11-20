<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="primary-center mb-3" style="max-width: 30rem;">
      <div class="card-body text-primary">
  
    <center>
        <div class="card border-primary mb-3" style="max-width: 30rem;">
            <div class="card-header"><h4>Data Pendaftar</h4></div>
            <div class="card-body text-primary">
                <?php
                if (isset($_POST['daftar'])) {
                    $jurusan = $_POST['jurusan'];
                    $nama = $_POST['nama_siswa'];
                    $jk = $_POST['jk'];
                    $tl = $_POST['tempat_lahir'];
                    $tgl_lahir = $_POST['tanggal_lahir'];
                    $nomor_hps = $_POST['no_hps'];
                    $email = $_POST['email'];
                    $provinsi = $_POST['provinsi'];
                    $kako = $_POST['kota'];
                    $kec = $_POST['kecamatan'];
                    $alamat = $_POST['desa'];
                    $kode = $_POST['kode_pos'];
                    $nas = $_POST['asal_sklh'];
                    $as = $_POST['alamat_sklh'];
                    $nama_ortu = $_POST['nama_ortu'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $no_hp = $_POST['no_hp'];
                    $al_lengkap = $_POST['alamat_ortu'];
                    // Mendefinisikan kelas ppdb
                    class ppdb {
                        public function data_diri($jurusan, $nama, $jk, $tl, $tgl_lahir, $nomor_hps, $email) {
                            echo "<h4>Data Diri Calon Pendaftar</h4>";
                            echo "Jurusan : $jurusan <br>";
                            echo "Nama Lengkap : $nama <br>";
                            echo "Jenis Kelamin : $jk <br>";
                            echo "Tempat Lahir : $tl <br>";
                            echo "Tanggal Lahir : $tgl_lahir <br>";
                            echo "Nomor HP siswa yang bisa dihubungi : $nomor_hps <br>";
                            echo "Email : $email <br>";
                        }

                        public function acp($provinsi, $kako, $kec, $alamat, $kode_pos) {
                            
                            echo "<h4>Alamat Calon Pendaftar</h4>";
                            echo "Provinsi : $provinsi <br>";
                            echo "Kab/Kota : $kako <br>";
                            echo "Kecamatan : $kec <br>";
                            echo "Alamat : $alamat <br>";
                            echo "Kode Pos : $kode_pos";
                        }

                        public function data_asal($nas, $as) {
                            echo "<h4>Data Asal Sekolah</h4>";
                            echo "Nama Asal Sekolah : $nas <br>";
                            echo "Alamat Sekolah : $as <br>";
                        }

                        public function data_ortu($nama_ortu, $pekerjaan, $no_hp, $al_lengkap) {
                            echo "<h4>Data Orang Tua</h4>";
                            echo "Nama Lengkap Ayah/Ibu/Wali : $nama_ortu <br>";
                            echo "Pekerjaan Ayah/Ibu/Wali : $pekerjaan <br>";
                            echo "Nomor HP yang bisa dihubungi : $no_hp <br>";
                            echo "Alamat Lengkap : $al_lengkap <br>";
                        }
                    }

                    // Menginisialisasi objek dan memanggil metode dengan data yang dikirim melalui POST
                    $cetak = new ppdb();
                    
                    // Pastikan setiap variabel diambil dari POST dengan isset
                    

                    // Memanggil metode untuk menampilkan data
                    $cetak->data_diri($jurusan, $nama, $jk, $tl, $tgl_lahir, $nomor_hps, $email);
                    echo "<hr>";
                    $cetak->acp($provinsi, $kako, $kec, $alamat, $kode);
                    echo "<hr>";
                    $cetak->data_asal($nas, $as);
                    echo "<hr>";
                    $cetak->data_ortu($nama_ortu, $pekerjaan, $no_hp, $al_lengkap);
                }
                ?>
            </div>
        </div>
    </center>
    
    </div>
    </div>
</body>
</html>
