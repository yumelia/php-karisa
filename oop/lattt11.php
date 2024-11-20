<?php

if(isset($_POST['proses'])){
    $nama1 = $_POST['nama'];
    $kelas1 = $_POST['kelas'];
    $jurusan1 = $_POST['jurusan'];

    $n_harian = $_POST['harian'];
    $n_tugas = $_POST['tugas'];
    $n_uts = $_POST['uts'];
    $n_uas = $_POST['uas'];

    $n_harian2 = $_POST['harian2'];
    $n_tugas2 = $_POST['tugas2'];
    $n_uts2 = $_POST['uts2'];
    $n_uas2 = $_POST['uas2'];

    $n_harian3 = $_POST['harian3'];
    $n_tugas3 = $_POST['tugas3'];
    $n_uts3 = $_POST['uts3'];
    $n_uas3 = $_POST['uas3'];

    $n_harian4 = $_POST['harian4'];
    $n_tugas4 = $_POST['tugas4'];
    $n_uts4 = $_POST['uts4'];
    $n_uas4 = $_POST['uas4'];

    class rapot{
        public $rata;
        public $grade;

        public function rata_rata($n_harian1, $n_tugas1, $n_uts1, $n_uas1){
            $this->rata = ($n_harian1 + $n_tugas1 + $n_uts1 + $n_uas1) / 4;
            if($this->rata >= 75){
                $this->grade = 'Tuntas';
            } else {
                $this->grade = 'Tidak Tuntas';
            }
            return $this->rata;
        }
    }

    $cetak = new rapot();
    $cetak->rata_rata($n_harian, $n_tugas, $n_uts, $n_uas);
?>

<center>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama1; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $kelas1; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan1; ?></td>
        </tr>
    </table>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Mapel</th>
            <th>Harian</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata-rata</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Matematika</td>
            <td><?php echo $n_harian; ?></td>
            <td><?php echo $n_tugas; ?></td>
            <td><?php echo $n_uts; ?></td>
            <td><?php echo $n_uas; ?></td>
            <td><?php echo $cetak->rata; ?></td>
            <td><?php echo $cetak->grade; ?></td>
        </tr>
        <tr>
            <td>Indonesia</td>
            <td><?php echo $n_harian2; ?></td>
            <td><?php echo $n_tugas2; ?></td>
            <td><?php echo $n_uts2; ?></td>
            <td><?php echo $n_uas2; ?></td>
            <td><?php echo $cetak->rata_rata($n_harian2, $n_tugas2, $n_uts2, $n_uas2); ?></td>
            <td><?php echo $cetak->grade; ?></td>
        </tr>
        <tr>
            <td>Inggris</td>
            <td><?php echo $n_harian3; ?></td>
            <td><?php echo $n_tugas3; ?></td>
            <td><?php echo $n_uts3; ?></td>
            <td><?php echo $n_uas3; ?></td>
            <td><?php echo $cetak->rata_rata($n_harian3, $n_tugas3, $n_uts3, $n_uas3); ?></td>
            <td><?php echo $cetak->grade; ?></td>
        </tr>
        <tr>
            <td>Produktif</td>
            <td><?php echo $n_harian4; ?></td>
            <td><?php echo $n_tugas4; ?></td>
            <td><?php echo $n_uts4; ?></td>
            <td><?php echo $n_uas4; ?></td>
            <td><?php echo $cetak->rata_rata($n_harian4, $n_tugas4, $n_uts4, $n_uas4); ?></td>
            <td><?php echo $cetak->grade; ?></td>
        </tr>
    </table>
</center>
<?php
}
?>