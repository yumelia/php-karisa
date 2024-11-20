<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>latihan5</title>
  </head>
  <body>
  <center>
    <img src="yayasan1.png" width="200" alt="">
    <h2>PENGGAJIHAN</h2>
    <H2>GURU/KARYAWAN YAYASAN ASSALAAM</H2>
    
    <div class="card text-center" style="width: 450px;">
  <div class="card-header">
    Data Penggajihan
  </div>
  <form action="latihan5g.php" method="POST">
  <div class="card-body">
  <div class="mb-3" align="left">
      <label for="disabledTextInput" class="form-label">No</label>
      <input type="text" name="nomer" id="disabledTextInput" class="form-control" placeholder="No">
    </div>
    <div class="mb-3" align="left">
      <label for="disabledSelect" class="form-label">Nama</label>
      <input type="text" name="nama" id="disabledTextInput" class="form-control" placeholder="Nama">
      <br>                  
      <label for="disabledSelect" class="form-label">Unit Pendidikan</label>
      <select id="disabledSelect" name="unit" class="form-select">
        <option>Pilih unit pendidikan</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMK">SMK</option>
      </select>
      <br>
      <div class="mb-3" align="left">
      <label for="disabledTextInput" class="form-label">Tanggal Gaji</label>
      <input type="date" name="tanggal_gj" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    
    <h3 class="d-flex justify-content-between">
          <span><i>Gaji</i></span>
          <span><i>Potongan</i></span>
        </h3>

        <!-- Row for Gaji and Potongan -->
        <div class="row">
          <div class="col-6">
            <!-- Gaji Section -->
            <div class="mb-3" align="left">
              <label for="gajiInput" class="form-label">Jabatan</label>
              <select id="statusKerjaSelect" name="jabatan" class="form-select">
            <option>Pilih Jabatan</option>
            <option value="tetap">Kepala Sekolah</option>
            <option value="wakasek">Wakasek</option>
            <option value="guru">Guru</option>
            <option value="ob">OB</option>
          </select>
            </div>
            <div class="mb-3" align="left">
              <label for="tunjanganInput" class="form-label">Lama Kerja</label>
              <input type="text" name="lk" id="lkInput" class="form-control" placeholder="Lama kerja">
            </div>
            <div class="mb-3">
          <label for="statusKerjaSelect" class="form-label">Status Kerja</label>
          <select id="statusKerjaSelect" name="sk" class="form-select">
            <option>Pilih Status Kerja</option>
            <option value="tetap">Tetap</option>
            <option value="kontrak">Kontrak</option>
          </select>
          
        </div>
          </div>

          <div class="col-6">
            <!-- Potongan Section -->
            <div class="mb-3" align="left">
              <label for="bpjsInput" class="form-label">BPJS</label>
              <input type="text" name="bpjs" id="bpjsInput" class="form-control" placeholder="">
            </div>
            <div class="mb-3" align="left">
              <label for="pinjamanInput" class="form-label">Pinjaman</label>
              <input type="text" name="pinjaman" id="pinjamanInput" class="form-control" placeholder="Pinjaman">
            </div>
            <div class="mb-3" align="left">
              <label for="tabunganLainInput" class="form-label">Tabungan</label>
              <input type="text" name="tabungan" id="tabunganInput" class="form-control" placeholder="Tabungan">
            </div>
          </div>
        </div>
        <div class="mb-3" align="left">
              <label for="lainnyaLainInput" class="form-label">Lainnya</label>
              <input type="number" name="lainnya" id="lainnyaInput" class="form-control" placeholder="Lainnya">
            </div>
            <center>
            <button type="submit" name="proses" class="btn btn-primary">Proses</button>
            </center>
            </form>
      </div>
      

</center>

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