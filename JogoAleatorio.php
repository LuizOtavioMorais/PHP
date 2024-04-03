<?php

$n = rand(1,100);
$resposta;

while($resposta != $n){
    echo "Digite um numero aleatorio de 0 a 100: " .PHP_EOL;
    $resposta = readline();

    if($n > $resposta){
        echo "Tente novamente, o numero resposta é MAIOR" .PHP_EOL;
    }
    else if($n < $resposta){
        echo "Tente novamente, o numero resposta é MENOR" .PHP_EOL;
    }
}
echo "Parabens você acertou, o numero era: " . $n .PHP_EOL;