<?php
class kendaraan{

    //property
    public $warna = "biru";
    //method
    public function a(){
        echo "Saya adalah kendaraan";
    }
}
//class anak
   class mobil extends kendaraan{

    public function b(){
        echo $this->a();
        echo "<br>";
        echo "warna saya adalah $this->warna"; 
    }
   }

   $cetak = new mobil();
   echo $cetak->b();
?>