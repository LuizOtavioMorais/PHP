<?php

$numero = array(1,3,5,8,9,7,1,6,5,3,6,9,4,1,2,3);
function bubbleSort($numero) {
    $tamanho = count($numero);
    for ($i = 0; $i < $tamanho - 1; $i++) {
        for ($j = 0; $j < $tamanho - $i - 1; $j++) {
            if ($numero[$j] > $numero[$j + 1]) {
                $temporario = $numero[$j];
                $numero[$j] = $numero[$j + 1];
                $numero[$j + 1] = $temporario;
            }
        }
    }
    return $numero;
}
$numeroOrdenado = bubbleSort($numero);
echo "Antes de ordenar: " . implode(", ", $numero) . PHP_EOL;
echo "Ordenada: " . implode(", ", $numeroOrdenado);