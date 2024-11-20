<?php

$orang = [
    [
        "NIS" => 1001,
        "Nama" => "Haddad",
        "Kelas" => "11 RPL 3",
        "Ekskul" => [
        "tari" => "SeniTari",
        "karawitan" => "Karawitan",
        "futsal" => "Futsal"
        ]
    ],
    [
        "NIS" => 1002,
        "Nama" => "Sandi",
        "Kelas" => "11 RPL 1",
        "Ekskul" => "Futsal"
    ],
];

foreach($orang as $manusia){
    echo "NIS :" . $manusia["NIS"] . "<br>";
    echo "Nama :" . $manusia["Nama"] . "<br>";
    echo "Kelas :" . $manusia["Kelas"] . "<br>";

    echo "Ekskul : <ul>";

    foreach ((array) $manusia["Ekskul"] as $nama_ekskul) {
        echo "<li>" . $nama_ekskul . "</li>";
    }
    echo "</ul><br><hr>";
}

?>