<?php

class lingkaran{
    private $jari;
    public const Phi = 3.14;

    public function hitungLuas($jari){
        return self::Phi * $jari * $jari;
    }
}

$lingkaran1 = new lingkaran;
echo $lingkaran1->hitungLuas(7);

// //seorang siswa mendapat nilai ulangan
// 1. mtk = 85
// 2. indo = 70
// 3. pjok = 100
// //buatlah sebuah kelas ulangan dengan method cetakRaport yang menampilkan sebuah string dengan ketentuan nilai sbg berikut:
// A = 90
// B = 80
// C = 70

class ulangan{
    private $mtk, $indo, $pjok;
    const A = 90, B = 80, C = 70;

    public function __construct($mtk, $indo, $pjok)
    {
        $this->mtk = $mtk;
        $this->indo = $indo;
        $this ->pjok = $pjok;
    }

    public function __destruct()
    {
        echo "Objek telah dihapus";
    }

    public function cetakRaport($name) {
        if($this->mtk >= self::A) {
            $nilai_mtk = "A";
        }elseif($this->mtk >= self::B) {
            $nilai_mtk = "B";
        }elseif($this->mtk >= self::C) {
            $nilai_mtk = "C";
        }else {
            $nilai_mtk = "D";
        }

        if($this->indo >= self::A) {
            $nilai_indo = "A";
        }elseif($this->indo >= self::B) {
            $nilai_indo = "B";
        }elseif($this->indo >= self::C) {
            $nilai_indo = "C";
        }else {
            $nilai_indo = "D";
        }

        if($this->pjok >= self::A) {
            $nilai_pjok = "A";
        }elseif($this->pjok >= self::B) {
            $nilai_pjok = "B";
        }elseif($this->pjok >= self::C) {
            $nilai_pjok = "C";
        }else {
            $nilai_pjok = "D";
        }

        return
            "Nilai matematika $name adalah $nilai_mtk" . PHP_EOL . "Nilai B.Indo $name adalah $nilai_indo" . PHP_EOL . "Nilai PJOK $name adalah $nilai_pjok" . PHP_EOL;
    }
}

$nayo = new ulangan(85, 70, 100);
echo $nayo->cetakRaport("Nayo");
?>