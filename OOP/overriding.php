<?php

abstract class produk {
    private $judul, $penulis, $penerbit, $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() 
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} - (Rp. $this->harga)";
        return $str;
    }
}

class komik extends produk{

    private $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfo() . " ~ {$this->jmlHalaman}";

        return $str;
    }
}

$Manga = new komik("Naruto Shippuden", "Masashi Kishimoto", "Shonen Jump", 50.000, 35);
echo $Manga->getInfoProduk() . PHP_EOL;

class game extends produk{
    private $wktBermain;

    public function __construct($judul, $penulis, $penerbit, $harga, $wktBermain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktBermain = $wktBermain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfo() . " ~ {$this->wktBermain} jam.";

        return $str;
    }
}

$tensura = new game("Isekai Memories", "Han", "Bandai Namco", 0, 24);
echo $tensura->getInfoProduk() . PHP_EOL;