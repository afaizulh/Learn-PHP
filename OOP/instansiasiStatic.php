<?php

class B 
{
    public function bau() {
        return "hello";
    }

    public static function wangi() {
        echo (new self)->bau() . "world";
    }
}

B::wangi();

