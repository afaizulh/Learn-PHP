<?php
class Variadic
{
    public static function foo(int ...$number)
    {
        return array_sum($number);
    }
}

$arr = [7,2,4,5];

echo Variadic::foo(...$arr);
