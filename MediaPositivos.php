<?php
$numerosPosi = array();
$numero = 1;
while($numero >= 0){
    echo "Digite numero positivos (digite um negativo para finalizar)" .PHP_EOL;
    $numero = readline();
    $numerosPosi[] = $numero;
}
$valTotal = array_sum($numerosPosi);
$quantiNumeros = count($numerosPosi);

if ($quantiNumeros > 0){
    $media = $valTotal / $quantiNumeros;
    echo "A media dos numeros positivos é : " . $media;
}
else{
    echo "não a numero positivos para tirar a media";
}