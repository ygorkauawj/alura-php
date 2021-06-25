<?php

$idade = 17;
$numeroDePessoas = 2;
//$nome = 'Ygor';

echo "Você só pode entrar sozinho se tiver 18 anos ou mais, ou acompanhado se tiver 16 ou 17 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade, pode entrar sozinho." . PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas >= 2) {
    echo "Você tem $idade anos mas está acompanhado, pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";