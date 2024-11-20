<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latihan 12</title>
  </head>
  <body>

  <div class="card">
  <h5 class="card-header">Data Diri Calon Pendaftar (Form Yang Bertanda * Wajib di isi)</h5>
  <div class="ard-body">
  <form action="lattt12.php" method="post">
  <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Jurusan</label>
    <select class="form-select" name="jurusan">
  <option selected>Pilih Jurusan</option>
  <option value="TKRO (Mobil)">Teknik Kendaran Ringan otomotif</option>
  <option value="TBSM (Sepeda Motor)">Teknik Bisnis Sepeda Motor</option>
  <option value="RPL (Komputer)">Rekayasa Perangkat Lunak</option>
</select>
  </div>
  <div class="mb-3 d-flex align-items-center">
  <label class="col-sm-2 col-form-label">Nama Lengkap</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_siswa">
    </div>
  </div>
  <div class="col-sm-6 align-items-center">
    <div class="form-group row">
     <div class="col-sm-4">
      <span>Jenis Kelamin</span>
        </div>
        <div class="col-md-8 controls">
        <div class="vs-radio-con">
        <input type="radio" name="jk" checked value="laki laki">
        <span class="vs-radio">
        <span class="vs-radio--border"></span>
         <span class="vs-radio--circle"></span>
        </span>
         <span class="">Laki - Laki</span>
        </div>
        <div class="vs-radio-con">
        <input type="radio" name="jk" value="perempuan">
        <span class="vs-radio">
         <span class="vs-radio--border"></span>
         <span class="vs-radio--circle"></span>
        </span>
        <span class="">Perempuan</span>
           </div>
        </div>
    </div>
</div>
<br>
        <div class="mb-3 d-flex align-items-center">
  <label class="col-sm-2 col-form-label">Tempat Lahir</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir">
    </div>
  </div>
  <div class="mb-3 d-flex align-items-center">
  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
  <div class="col-sm-10">
    <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir">
    </div>
  </div>
  <div class="mb-3 d-flex align-items-center">
  <label class="col-sm-2 col-form-label">Nomor HP siswa</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" placeholder="HP" name="no_hps">
    </div>
  </div>
  <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>

    </div>
  </div>
</div>

<div class="card">
  <h5 class="card-header">Alamat Calon Pendaftar</h5>
  <div class="card-body">
  <form>
  <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Provinsi</label>
                    <select name="provinsi" class="form-select" aria-label="Default select example">
                        <option value="-">Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                    </select>
</div>
    <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Kab / Kota</label>
       <select name="kota" class="form-select" aria-label="Default select example">
                    <option value="-">Pilih Provinsi dahulu</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Bandung Barat">Bandung Barat</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Ciamis">Ciamis</option>
                    <option value="Cianjur">Cianjur</option>
                    <option value="Cimahi">Cimahi</option>
                    <option value="Cirebon">Cirebon</option>
                    <option value="Garut">Garut</option>                        <option value="Indramayu">Indramayu</option>
                    </select>
    </div>

    <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Kecamatan</label>
       <select name="kecamatan" class="form-select" aria-label="Default select example">
           <option value="-">Pilih Kota dahulu</option>
               <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                    </select>
            </div>
            <div class="mb-3 d-flex align-items-center">
    <label class="col-sm-2 col-form-label">Desa / Kelurahan</label>
       <select name="desa" class="form-select" aria-label="Default select example">
           <option value="-">Pilih Kecamatan dahulu</option>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
            </div>
            <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamatt" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
              <label class="col-sm-2 col-form-label">Kode Pos</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="Kode Pos" name="kode_pos">
                </div>
              </div>
    </div>
    
    <div class="card">
        <div class="card-header">
                    <h4>Data Asal Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Asal Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Asal Sekolah" name="asal_sklh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat_sklh" placeholder="Alamat Sekolah"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Data Orang Tua</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row" align="left">
                    <div class="col-sm d-flex align-items-center">
                        <label class="form-label me-5">Nama</label>
                        <select class="form-select" name="ortu" required>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                    </div>
                    <div class="col-sm">
                <input type="text" class="form-control" name="nama_ortu" placeholder="Nama Lengkap" required>
            </div>
                </div><br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pekerjaan Ortu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" id="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Nomor HP" name="no_hp">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat_ortu" placeholder="Alamat Lengkap"></textarea>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" name="daftar">Simpan & Daftar</button>
                    </center>
            </div>
</form>
            

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>