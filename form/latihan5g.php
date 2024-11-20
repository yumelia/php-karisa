<?php


$noo = isset($_POST['no']) ? $_POST['no'] : 0;               
$nama1 = isset($_POST['nama']) ? $_POST['nama'] : '';         
$unit1 = isset($_POST['unit']) ? $_POST['unit'] : '';         
$tanggal_gj1 = isset($_POST['tanggal_gj']) ? $_POST['tanggal_gj'] : ''; 
$jabatan1 = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
$lk1 = isset($_POST['lk']) ? $_POST['lk'] : 0;               
$sk1 = isset($_POST['sk']) ? $_POST['sk'] : '';               
$bpjs = isset($_POST['bpjs']) ? $_POST['bpjs'] : 0;         
$pinjaman = isset($_POST['pinjaman']) ? $_POST['pinjaman'] : 0; 
$tabungan = isset($_POST['tabungan']) ? $_POST['tabungan'] : 0; 
$lainnya = isset($_POST['lainnya']) ? $_POST['lainnya'] : 0;   


switch ($jabatan1) {
    case "Kepala Sekolah":
    $gaji = 1000000;
    break;
    case "Wakasek":
    $gaji = 7500000;
    break;
    case "Guru":
    $gaji = 5000000;
    break;
    case "OB":
    $gaji = 2500000;
    break;
    default:
    $gaji = 0;
    break;
} 

if ($lk1 > 5) {
    $tunjangan = 1000000;
    $bonus = 500000;
} else {
    $tunjangan = 0;
    $bonus = 0;
}

$gaji_kotor = $gaji + $tunjangan + $bonus; 
$total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya; 
$gaji_bersih = $gaji_kotor - $total_potongan;

// $gaji_kotor = $gaji + $tunjangan + $bonus;
// $total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
// $gaji_bersih = $gaji_kotor - $total_potongan;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <h3>Struk Gaji</h3>
        <div class="container mt-5" style="width: 450px;">
            <div class="card">
                <div class="card-header text-center">
                    <h5><?php echo $nama1; ?></h5>
                </div>
                <div class="card-body text-primary">
                    <h3>primary Card Title</h3>
                    <table>
                        <tr>
                            <td>No</td>
                            <td>:</td>
                            <td><?php echo $noo ; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama1; ?></td>
                        </tr>
                        <tr>
                            <td>Unit Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $unit1; ?></td>
                        </tr>
                    </table>
                    <h3>Gaji</h3>

                    <table>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $jabatan1; ?></td>
                        </tr>
                        <tr>
                            <td>Gaji</td>
                            <td>:</td>
                            <td>Rp. <?php echo $gaji; ?></td>
                        </tr>
                        <tr>
                            <td>Lama Kerja</td>
                            <td>:</td>
                            <td><?php echo $lk1; ?> Tahun</td>
                        </tr>
                        <tr>
                            <td>Tunjangan</td>
                            <td>:</td>
                            <td><?php echo $tunjangan; ?></td>
                        </tr>
                        <tr>
                            <td>Status Kerja</td>
                            <td>:</td>
                            <td><?php echo $sk1; ?></td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td>:</td>
                            <td><?php echo $bonus; ?></td>
                        </tr>
                        <tr>
                            <th>Gaji Kotor</th>
                            <td>:</td>
                            <td><?php echo $gaji_kotor; ?></td>
                        </tr>
                    </table>
                    <h3>Potongan</h3>
                    <table>
                        <tr>
                            <td>BPJS</td>
                            <td>:</td>
                            <td><?php echo $bpjs; ?></td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td><?php echo $pinjaman; ?></td>
                        </tr>
                        <tr>
                            <td>Tabungan</td>
                            <td>:</td>
                            <td><?php echo $tabungan; ?></td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>:</td>
                            <td><?php echo $lainnya; ?></td>
                        </tr>
                        <tr>
                            <th>Total Potongan</th>
                            <td>:</td>
                            <td><?php echo $total_potongan; ?></td>
                        </tr>
                    </table>
                    <h3>Total</h3>
                    <table>
                        <tr>
                            <td><h4>Gaji Bersih</h4></td>
                            <td>:</td>
                            <td><?php echo $gaji_bersih; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>
</html>