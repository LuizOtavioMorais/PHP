<?php
echo "Escreva um numero para saber seus divisores: " . PHP_EOL;
$n = readline();
$divisor = 1;

while($divisor < $n){
    $resto = $n % $divisor;
    if ($resto == 0){
        echo "O numero " . $n . " é divisivel por " . $divisor . PHP_EOL;
    }
    ++$divisor;
}

