<?php
$n1 = 1;
$n2 = 0;

for ($i = 0; $i < 10; $i++) {
    $n3 = $n1 + $n2;
    echo $n3 . PHP_EOL;
    $n1 = $n2;
    $n2 = $n3;
}