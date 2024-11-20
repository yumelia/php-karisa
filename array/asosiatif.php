<?php

// membuat array asosiatif
$artikel = [
    "Judul" => "Belajar Pemograman PHP",
    "Penulis" => "petanikode",
    "view" => 128,
    "tanggal" => "20 juni 2005"
];

// mencetak isi array
echo "<p>".$artikel["judul"]."</p>";
echo "<p>oleh: ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";
echo "<p> tanggal: ".$artikel["tanggal"]."</p>";

?>