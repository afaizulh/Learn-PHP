<?php

// Final class Hewanah
// {
//     protected $kaki = 4;

//     public function getKaki(){
//         return $this->kaki;
//     }
// }

// class Kambing extends Hewanah
// {

// }

// $kambing = new Kambing;
// echo $kambing->getKaki();

/////////////////////////////////////////////

class Hewanah
{
    protected $kaki = 4;

    final public function getKaki(){
        return $this->kaki;
    }
}

class Kambing extends Hewanah
{
    public function getKaki(){

    }
}

$kambing = new Kambing;
echo $kambing->getKaki();