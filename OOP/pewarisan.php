<?php

class Mobil {

    private $jenis;

    public function setJenisMobil($jenisMobil) {
        $this->jenis = $jenisMobil;
    }

    public function getJenisMobil() {
        return $this->jenis;
    }
}

class mobilSedan extends mobil {

}

$mobil1 = new mobil;
$mobil1->setJenisMobil("Sedan");
echo $mobil1->getJenisMobil();

    echo PHP_EOL;

$mobil2 = new mobilSedan;
$mobil2->setJenisMobil("JEEP");
echo $mobil2->getJenisMobil();

echo PHP_EOL;

class kelas {
    private $jmlSiswa, $tv, $meja, $kursi, $papanTulis;

    public $namaKelas;

    public function __construct($Kelas)
    {
        $this->namaKelas = $Kelas;
    }

    public function setProfile($jmlSiswa, $tv, $meja, $kursi, $papanTulis) {
        $this->jmlSiswa = $jmlSiswa;
        $this->tv = $tv;
        $this->meja = $meja;
        $this->kursi = $kursi;
        $this->papanTulis = $papanTulis;
    }

    public function getProfileClass() {
        return "Ini adalah kelas {$this->namaKelas}. Disini kami berjumlah {$this->jmlSiswa}, dan kami memiliki {$this->tv} buah tv, {$this->meja} buah meja, {$this->kursi} buah kursi dan {$this->papanTulis} buah Papan Tulis.";
    }
}

class SMP extends kelas {
    public function setDataSMP($jmlSiswa, $kursi, $papanTulis, $tv, $meja) {
        parent::setProfile($jmlSiswa, $tv, $meja, $kursi, $papanTulis);

        
    }
}

class SMK extends kelas {
    public function profile() {
        $a = parent::getProfileClass();

        return $a;
    }
}

$xRPL = new SMK("10 RPL"); 
$xRPL->setProfile(16, 1, 3, 19, 2);
echo $xRPL->getProfileClass() . PHP_EOL;

$ixSMP = new SMP("9 SMP");
$ixSMP->setDataSMP(13, 2, 1, 4, 6);
echo $ixSMP->getProfileClass() . PHP_EOL;

$xiiTKJ = new SMK("11 TKJ");
$xiiTKJ->setProfile(13, 1, 5, 4, 1);
echo $xiiTKJ->profile() . PHP_EOL;