<?php
//For Statement
$nilai = 0;
for ( ; $nilai <=10;){
    echo "Nilai loop ke - $nilai" . PHP_EOL;
    $nilai++;
    PHP_EOL; 
};

for ($a = 10; $a <= 100; $a++){
    echo "Urutan ke $a" . PHP_EOL;
};

$a = 1;
while(true){
    echo "ini nomer - $a" . PHP_EOL;
    $a++;
    if($a > 10) {
        break;
    }
}
PHP_EOL;