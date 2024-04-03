<?php
echo "Digite sua altura em METROS" . PHP_EOL;
$altura = readline();
echo "Digite seu peso em KG" . PHP_EOL;
$peso = readline();

$imc = $peso / $altura ** 2;

echo "Seu IMC é" . $imc . PHP_EOL;