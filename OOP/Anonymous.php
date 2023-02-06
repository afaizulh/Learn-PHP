<?php

echo preg_replace_callback('/[a-z]+/i', function (array $match) {
    return 'PHP' === $match[0] ? 'OOP' : $match[0];
}, 'Saya Belajar PHP');
echo PHP_EOL;