<?php

//Tipe Data Number
echo "tipe data int :";
var_dump(1234);

echo "tipe data float :";
var_dump(0.1234);

//Tipe Data Boolean
echo "Benar :";
var_dump(true);

echo "salah :";
var_dump(false);

//Tipe Data String
var_dump("texts");

echo "dia\t aku\n kita";
echo <<<contoh
ini adalah contoh string yang panjang
tidak perlu ketik ENTER secara manual,
bisa menggunakan petik juga
contoh;
echo "\n";

//Data Null
$name = "Salim";
$name = null;
$alamat = 'Jonggol';
echo $alamat;
echo "\n";
echo "is name null?";
var_dump(is_null($name));
echo "\n";

$contoh = "aKU";
$contoh = null;

var_dump(isset($contoh));

//Data Array
$arr = [1,2,3,4,5,6,7,8,9,10];
$arr2 = array(1,2,3,4,5,6);
var_dump($arr2);

echo "\n";
echo $arr[5];
echo "\n";

$arr_str = ["awbdowqu,wiquhdwo,naofu","awbdowqu,wiquhdwo,naofu"];

var_dump($arr_str);

echo "\n";

$data = array(
    "nama" => "Pejul",
    "kelas" => "10"
);

echo "\n";

$a = 10;
$b = 30;

$result = $a + $b;
echo $result;

echo "\n";
$result_modulus = $a % $b;
echo $result_modulus;

echo "\n";
