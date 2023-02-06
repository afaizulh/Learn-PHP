<?php

require_once "App/init.php";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

$manga = new Komik(null, "Masashi Kishimoto", "Shonen Jump - Elex Media", 50000, 35);
echo $manga->getInfoProduk() . PHP_EOL;

$tensura = new Game("Isekai Memories", "Han", "Bandai Namco", 0, 24);
echo $tensura->getInfoProduk() . PHP_EOL;

new ProdukUser;
echo PHP_EOL;
new ServiceUser;
echo PHP_EOL;

