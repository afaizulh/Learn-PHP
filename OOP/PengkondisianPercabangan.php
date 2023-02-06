<?php

//Pengkondisian, percabangan
$viewers = "500";
$comment = "100";

if ($viewers >= 100 && $comment >= 100) {
    echo "Anda dapet duit";
}
else {
    echo "Nice try";
};
echo "\n";

$rankatas = "600";
$rankwillup = "100";

if ($rankatas >= 1000 && $rankwillup >= 200):
    echo "Selamat, kamu sudah di rank tertinggi";
elseif ($rankatas >= 600 && $rankwillup >= 200):
    echo "Selamat, kamu naik level!";
elseif ($rankwillup < 200):
    echo "Ayo, naikkan levelmu!";
endif;

echo "\n";

$hatshop = "topeng";

switch ($hatshop) {
    case "simple hat":
    echo "harganya 50.000" . PHP_EOL;
    break;

    case "woman hat":
    echo "harganya 200.000" . PHP_EOL;
    break;

    default:
    echo "Ente salah toko" . PHP_EOL;
    break;
};

$select = "Indonesia";
$country = null;

if ($select == "Indonesia"){
    echo $country = "Selamat Pagi!" . PHP_EOL;
}
else {
    echo $country = "Good Morning!" . PHP_EOL;
};

$country = $select == "Indonesia" ? "Selamat Pagi" : "Good morning";
echo $country . PHP_EOL;

$idn = "bogor";

$location = $idn ?? "hilang dari permukaan bumi";
echo $location . PHP_EOL;

// for loop
// for ( ; ; ){
//     echo "Otsu" . PHP_EOL;
// };