<?php

// require 'Produk/Cek.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/User.php';
// require 'Service/User.php';

spl_autoload_register(function ($class) {
    //$class = App\Produk\User di jadiin ->
    //$class = [App, Produk, User]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});
