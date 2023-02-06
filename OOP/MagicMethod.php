<?php

class ConvertString
{
    public function __toString()
    {
        return "Udah di convert nih";
    }
}


echo $nyobaConvert = new ConvertString;

echo PHP_EOL;

class MagicMethod
{
    private $name, $age;
    public function __set($property, $value)
    {
        if ('name' === $property) {
            $this->name = $value;
            echo "Selamat anda berhasil input $property dengan nama : $this->name";
            echo PHP_EOL;
        }elseif ('age' === $property){
            $this->age = $value;
            echo "Selamat anda berhasil input $property dengan age : $this->age";
            echo PHP_EOL;
        }else {
            throw new ParseError(sprintf('Undefined property %s in class %s', $property, __CLASS__));
        }
    }

    public function __get($property) 
    {
        if($property !== null){
            return $this->name . PHP_EOL;
        }else{
            throw new ParseError(sprintf('Undefined property %s in class %s', $property, __CLASS__));
        }
    }
}
// $magic = new MagicMethod();
// $magic->name = 'Muhamad Surya Iksanudin';
// $magic->age = 14;

// echo $magic->age;

class Issets 
{
    private $kelas;

    public function __isset($property)
    {
        if ('kelas' === $property)
        return true;
    }
}

$objekI = new Issets;
var_dump(isset($objekI->kelas));

class Unsets
{
    protected $user = [
        'nama' => "Joy",
        'alamat' => "Bogor Kota",
        'noTelp' => "99996666699999",
    ], $ktp = [1,2,3,4];

    public function __unset($property)
    {
        if (isset($this->user[$property])) {
            unset($this->user[$property]);
        }
    }

    public function __sleep()
    {
        return ['ktp'];
    }
}

class childUnsets extends Unsets
{
    private $z = [
        'nama' => "zzz",
        'alamat' => "Malang"
    ];
}

// $objU = new Unsets;
// $chill = new childUnsets;
// var_dump(serialize($objU));

class Bank
{
    private function database()
    {
        echo "Selamat anda berhasil masuk.";
    }

    public function __call($name, $arguments)
    {
        if ($name === 'database') {
            return $this->database($arguments[0]);
        }else {
            throw new ParseError(sprintf("$name tidak dapat ditemukan!"));
        }
    }
}

// $nasabah1 = new Bank;
// $nasabah1->database();