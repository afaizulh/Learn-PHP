<?php

class Connection
{
    public function connect()
    {
        throw new RuntimeException('Anda harus mengimplementasikan method connect() sesuai dengan database driver yang Anda gunakan.');
    }
}

try{
    $err = new Connection();
    $err->connect();
}catch (RuntimeException $e){
    echo $e->getMessage();
    echo PHP_EOL;
}

class Errorable
{
    public static function calculate(int $number)
    {
        return ($number % 0);
    }
}

try{
    Errorable::calculate(7);
}catch (RuntimeException $e) {
    echo "Harusnya ga tampil";
}catch (DivisionByZeroError $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}finally {
    echo "Error tidak sesuai";
}

echo 'Ini tidak dieksekusi';
echo PHP_EOL;