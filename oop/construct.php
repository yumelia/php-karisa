<?php

class kucing{

    public function __construct(){
        echo "Haalo saya kucing <br>";
    }
    public function makan(){
        echo "kucing suka makan wishkas <br>";
    }
    public function minum(){
        echo "kucing suka minum air <br>";
    }
    public function __destruct(){
        echo "suara kucing imut miawwww";
    }
}
 $cetak = new kucing();

 echo $cetak->makan();
 echo $cetak->minum();
?>