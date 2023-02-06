<?php

class buku {
    public $judul = "buku bahasa indonesia",
            $penulis = "kak seto",
            $harga = 10000,
            $jumlahHalaman = 100,
            $penerbit = "gramedia";

            public function membeliBuku() {
                echo "Anda telah membeli buku yang diterbitkan oleh {$this->penerbit} yang ditulis {$this->penulis} dengan harga {$this->harga}. Selamat Membaca!" . PHP_EOL;
            }
}

$buku1 = new buku;
$buku1->judul = "buku matematika";
$buku1->penulis = "yanto";
$buku1->harga = "20000";

$buku2 = new buku;
$buku2->judul = "buku fisika";
$buku2->penulis = "bobi";
$buku2->harga = "70000";
$buku2->jumlahHalaman = "700";

$buku3 = new buku;

var_dump($buku1);
$buku1->membeliBuku();


class rumah {
    public $pintu = "Kayu jati",
            $jmlKamar = 10,
            $kmrMandi = 1,
            $kolamIkan = true,
            $jmlIkan = 5,
            $jendela = 200;

    public function menambahIkan($newIkan) {
        $total = $this->jmlIkan + $newIkan;
        echo "jumlah ikan sekarang adalah $total";
    }
}

$rumahKecil = new rumah;
$rumahKecil->jmlIkan = 1;
$rumahKecil->menambahIkan(100);


?>