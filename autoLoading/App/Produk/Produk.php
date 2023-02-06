<?php

declare(strict_types=1);

abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga;

    public function __construct(?String $judul = "judul", ?String $penulis = "penulis", ?String $penerbit = "penerbit", ?Int $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(): String
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
}
