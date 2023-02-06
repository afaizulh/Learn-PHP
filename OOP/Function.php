<?php

//Function

function greating($objek, $feedback) {
    echo "Bonjour $objek!" . PHP_EOL;
    echo "Konnichiwa $feedback!" . PHP_EOL;
}

greating("Nayo", "France");

function data($nama, $alamat, $umur, $hobi) {
    echo "halo nama saya $nama saya tinggal di $alamat saya berumur $umur tahun saya suka $hobi.";
}
data("Jul", "Bogor", 16, "Turu");

$data = [
    $name = ["rehan", "aisy", "nadhif"],
    $address = ["jakarta", "cikarang", "bekasi"],
    $age = [15, 16, 17],
    $hobby = ["belajar", "memancing", "baca"]
];

function dataOrang($nama, $alamat, $umur, $hobi) {
    
    echo "halo nama saya $nama saya tinggal di $alamat saya berumur $umur tahun saya suka $hobi.";
}
dataOrang($data[0][2], $data[1][0], $data[2][2], $data[3][1]);

echo "\n";
echo $data[3][2];

PHP_EOL;

function hitung(int $angka1,int $angka2) {
    $total = $angka1 + $angka2;
    return $total;
}

echo hitung(10, 5);