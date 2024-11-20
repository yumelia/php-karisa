<?php

$buku = '[
    {
        "No": "1001",
        "Judul": "Milea",
        "Genre": "Romance",
        "Penulis": "Pidi Baiq",
        "Penerbit": "Airlangga",
        "Tahun_rilis": "2016"
    },
    {
        "No": "1002",
        "Judul": "Architecture of Love ",
        "Genre": "Romance",
        "Penulis": "Ika Natassa",
        "Penerbit": "Gramedia Pustaka Utama",
        "Tahun_rilis": "2016"
    },
    {
        "No": "1003",
        "Judul": "Malioboro at Midnight ",
        "Genre": "Romance",
        "Penulis": "Skysphire",
        "Penerbit": "Bukune",
        "Tahun_rilis": "2023"
    },
    {
        "No": "1004",
        "Judul": "Butterflies",
        "Genre": "Romance",
        "Penulis": "Ale",
        "Penerbit": "Bukune",
        "Tahun_rilis": "2023"
    },
    {
        "No": "1005",
        "Judul": "Hilmy Milan",
        "Genre": "Fiksi Romance",
        "Penulis": "Nadia Ristivani",
        "Penerbit": "Bukune",
        "Tahun_rilis": "2021"
    },
    {
        "No": "1006",
        "Judul": "Hello Cello",
        "Genre": "Romance",
        "Penulis": "Nadia Ristivani",
        "Penerbit": "Bukune",
        "Tahun_rilis": "2023"
    },
    {
        "No": "1007",
        "Judul": "Hello",
        "Genre": "Romance",
        "Penulis": "Tere Liye",
        "Penerbit": "Gramedia",
        "Tahun_rilis": "2023"
    },
    {
        "No": "1008",
        "Judul": "The Love Hypothesis",
        "Genre": "Romance",
        "Penulis": "Ali Hazelwood",
        "Penerbit": "Penguin Random House",
        "Tahun_rilis": "2021"
    },
    {
        "No": "1009",
        "Judul": "Berhenti Di Kamu",
        "Genre": "Fiksi Romance",
        "Penulis": "Gia Pratama",
        "Penerbit": "Penguin Random House",
        "Tahun_rilis": "2018"
    },
    {
        "No": "1010",
        "Judul": "Dikta & Hukum",
        "Genre": "Romance",
        "Penulis": "Dhian Farah",
        "Penerbit": "Asoka Aksara x Loveable",
        "Tahun_rilis": "2021"
    },
    {
        "No": "1011",
        "Judul": "Pesta Bunuh Diri ",
        "Genre": "Horor",
        "Penulis": "Daniel Ahmad",
        "Penerbit": "Gagas Media",
        "Tahun_rilis": "2021"
    },
    {
        "No": "1012",
        "Judul": "Kisah Tanah Jawa",
        "Genre": "Horor",
        "Penulis": "Om Hao",
        "Penerbit": "Gagas Media",
        "Tahun_rilis": "2018"
    },
    {
        "No": "1013",
        "Judul": "Wingit",
        "Genre": "Horor",
        "Penulis": "Sara Wijayanto",
        "Penerbit": "Elex Media Komputindo",
        "Tahun_rilis": "2020"
    },
    {
        "No": "1014",
        "Judul": "Dracula",
        "Genre": "Horor",
        "Penulis": "Bram Stoker",
        "Penerbit": "Archibald Constable and Company",
        "Tahun_rilis": "1897"
    },
    {
        "No": "1015",
        "Judul": "Bumi Manusia",
        "Genre": "Fiksi Sejarah",
        "Penulis": "Hasta Mitra",
        "Penerbit": "Pramoedya Ananta Toer",
        "Tahun_rilis": "1980"
    },
    {
        "No": "1016",
        "Judul": "Negeri 5 Menara",
        "Genre": "Romance",
        "Penulis": "Ahmad Fuadi ",
        "Penerbit": "Gramedia",
        "Tahun_rilis": "2009"
    },
    {
        "No": "1017",
        "Judul": "Cantik Itu Luka",
        "Genre": "Fiksi",
        "Penulis": "Eka Kurniawan",
        "Penerbit": "Jendela",
        "Tahun_rilis": "2002"
    },
    {
        "No": "1018",
        "Judul": "Laut Bercerita",
        "Genre": "Romance",
        "Penulis": "Leila S. Chudori",
        "Penerbit": "Gramedia",
        "Tahun_rilis": "2017"
    },
    {
        "No": "1019",
        "Judul": "Murder on the Orient Express",
        "Genre": "Fiksi Kriminal misteri",
        "Penulis": "Agatha Christie ",
        "Penerbit": "Collins Crime Club",
        "Tahun_rilis": "1934"
    },
    {
        "No": "1020",
        "Judul": "Katarsis",
        "Genre": "Fiksi Misteri",
        "Penulis": "Anastasia Aemilia ",
        "Penerbit": "Gramedia Pustaka Utama",
        "Tahun_rilis": "2013"
    }

]';

$jenis = json_decode($buku);

foreach($jenis as $novel){
    echo "No : {$novel->No} <br>";
    echo "Judul : {$novel->Judul} <br>";
    echo "Genre : {$novel->Genre} <br>";
    echo "Penulis : {$novel->Penulis} <br>";
    echo "Penerbit : {$novel->Penerbit} <br>";
    echo "Tahun Terbit : {$novel->Tahun_rilis} <br>";
    echo "<hr>";
}
?>

