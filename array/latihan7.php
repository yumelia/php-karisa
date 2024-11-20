<?php

$menu = [
    [
        "nama_pemilik" => "Safitri",
        "daftar_buah" => 
        [
            "buah1" =>
            [
                "jenis" => "Anggur",
                "varian" =>
                [
                    "Anggur Ijo",
                    "Anggur Putih"
                ]
            ]
            
        ]
    ],
    [
            "nama_pemilik" => "Rahman",
            "daftar_buah" =>
            [
                "buah1" =>
                [
                    "jenis" => "Alpukat",
                    "varian" =>
                    [
                        "Alpukat mentega",
                        "Alpukat biasa"
                    ]
                    ],
                    "buah2" =>
                    [
                        "jenis" => "Apel",
                        "varian" =>
                        [
                            "Apel Merah",
                            "Apel Hijau"
                        ]
                    ]
            ]
        ],
    ];
            foreach($menu as $buah) {
                echo "Nama Pemilik : " . $buah["nama_pemilik"] . "<br>";
                echo "Daftar Buah Kesukaan : <ul>";

                foreach ($buah["daftar_buah"] as $bulat){
                    echo "<li>" . $bulat["jenis"] . "<ul>";

                    foreach ($bulat["varian"] as $varian) {
                        echo "- $varian <br>";
                    }
                    echo "</ul></li>";
                }
                echo "</ul><bt><hr>";

                
            } 

?>