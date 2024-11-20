<?php
 
class bangun_datar{
   public $luas_persegi_panjang;
   public $persegi;
   public $segitiga;
   public $kel_persegip;
   public $kel_persegi;
   public $kel_segitiga;
   public $kel_lingkaran;
}

   class luas extends bangun_datar{

    public function persegi_p($panjang,$lebar){

        echo "<b>Menghitung Luas Persegi Panjang</b><br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        $this->luas_persegi_panjang = $panjang * $lebar;
        echo "Hasil : $this->luas_persegi_panjang";
    
    }

    public function persegi($sisi){

        echo "<b>Menghitung Persegi</b><br>";
        echo "Sisi persegi : $sisi <br>";
        $this->persegi = $sisi * $sisi;
        echo "Hasil : $this->persegi";
    }

    public function segitiga($alas,$tinggi){

        echo "<b>Menghitung Segitiga</b><br>";
        echo"Alas : $alas <br>";
        echo"Tinggi : $tinggi <br>";
        $this->segitiga = 1/2 * $alas * $tinggi;
        echo "Hasil : $this->segitiga";
    }
    
    public function lingkaran($jari){
    
        echo "<b>Menghitung Lingkaran</b><br>";
        echo"Jari-jari : $jari <br>";
        $this->lingkaran = 3.14 * $jari;
        echo "Hasil : $this->lingkaran";
    }
   }

   class keliling extends bangun_datar{

    public function persegi_p($panjang,$lebar){

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        $this->kel_persegip = 2 * ($panjang + $lebar);
        echo "Hasil : $this->kel_persegip";
    
    }
    public function persegi($sisi){

        echo "<b>Menghitung Persegi</b><br>";
        echo "Sisi persegi : $sisi <br>";
        $this->kel_persegi = 4 * $sisi;
        echo "Hasil : $this->kel_persegi";
    }

    public function segitiga($a,$b,$c){

        echo "<b>Menghitung Segitiga</b><br>";
        echo"sisi a : $a <br>";
        echo"sisi b : $b <br>";
        echo"sisi c : $c";
        $this->kel_segitiga = $a + $b + $c;
        echo "Hasil : $this->kel_segitiga";
    }
    
    public function lingkaran($jari){
    
        echo "<b>Menghitung Lingkaran</b><br>";
        echo"Jari-jari : $jari <br>";
        $this->kel_lingkaran = 2 * 3.14 * $jari;
        echo "Hasil : $this->kel_lingkaran";
    }

   }

   $cetak = new Luas();
 
   echo "<h2><u> LUAS BANGUN DATAR </u></h2>";
   echo $cetak->persegi_p(10,5);
   echo "<br>";
   echo "<hr>";
   echo $cetak->persegi(15,5);
   echo "<br>";
   echo "<hr>";
   echo $cetak->segitiga(20,10);
   echo "<br>";
   echo "<hr>";
   echo $cetak->lingkaran(8);
   

   $cetak2 = new keliling();
   echo "<h2><u> KELILING BANGUN DATAR </u></h2>";


   echo $cetak2->persegi_p(30,5);
   echo "<br>";
   echo "<hr>";
   echo $cetak2->persegi(60,5);
   echo "<br>";
   echo "<hr>";
   echo $cetak2->segitiga(20,10,5);
   echo "<br>";
   echo "<hr>";
   echo $cetak2->lingkaran(15);

?>