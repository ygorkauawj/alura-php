<?php

$peso = 72;
$altura = 1.73;

$imc = $peso / ($altura ** $altura);

if ($imc < 17) {
    echo "Você está muito abaixo do peso." . PHP_EOL;
} elseif ($imc >= 17 && $imc < 18.5) {
    echo "Você está abaixo do peso." . PHP_EOL;
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Você está com peso normal." . PHP_EOL;
} elseif ($imc >= 25 && $imc < 30) {
    echo "Você está acima do peso." . PHP_EOL;
} elseif ($imc >= 30 && $imc < 35) {
    echo "Você está na obesidade grau I." . PHP_EOL;
} elseif ($imc >= 35 && $imc < 40) {
    echo "Você está na obesidade grau II." . PHP_EOL;
} else {
    echo "Você está na obesidade grau III." . PHP_EOL;
}
