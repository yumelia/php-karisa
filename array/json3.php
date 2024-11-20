<?php

// data json
$dataJSON = '[
    {
        "nama": "Nurul Huda",
        "alamat": "Bandung"
    },
    {
        "nama": "Renza Ilham Risqi",
        "alamat": "Jakarta"
    }
]';

// dikonversikan ke JSON
$list = json_decode($dataJSON);

// tampilakan datanya
foreach($list as $mahasiswa){
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br>";
    echo "<hr>";

}

?>