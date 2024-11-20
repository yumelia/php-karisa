<?php

class contoh{

    public $nama = "Karrisa <br>";

    public function perkenalan(){
        echo "Assalamualaikum";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo "<br>";
echo $cetak->nama;

?>