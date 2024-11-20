<?php

$novel = [
    [
    "Judul" => "Dilan 1991",
    "Penulis" => "Pidi baiq",
    "Tanggal_rilis" => "20 November 2024",
    "Penerbit" => "Airlangga"
    ],
    [
        "Judul" => "Hujan",
        "Penulis" => "Tere Liye",
        "Tanggal_rilis" => "18 Oktober 2024",
        "Penerbit" => "Gramedia Pustaka"
    ],
    [
        "Judul" => "Pulang",
        "Penulis" => "Tere Liye",
        "Tanggal_rilis" => "15 September 2013",
        "Penerbit" => "Gramedia Pustaka"
    ],
    [
        "Judul" => "Bumi",
        "Penulis" => "Tere Liye",
        "Tanggal_rilis" => "13 Desember 2012",
        "Penerbit" => "Gramedia Pustaka"
    ],
    [
            "Judul" => "LAut Bercerita",
            "Penulis" => "Leila S.Cuhdiro",
            "Tanggal_rilis" => "19 Agustus 2007",
            "Penerbit" => "Kepustkaan Populer Gramedia (KPG)"
    ],
];

foreach($novel as $buku){
    echo"Judul :".$buku["Judul"]."<br>";
    echo"Penulis :".$buku["Penulis"]."<br>";
    echo"Tanggal rilis :".$buku["Tanggal_rilis"]."<br>";
    echo"Penerbit :".$buku["Penerbit"]."<br>";

}

?>
