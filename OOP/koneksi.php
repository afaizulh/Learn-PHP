<?php

class Konek {

    public function login($username, $password, $IP = "192.10.10") {
        echo "Selamat anda sudah login dengan username $username";
    }

}

$konek = new Konek;
$konek->login("ppp", "123");


?>