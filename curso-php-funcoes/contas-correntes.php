<?php

$conta1 = [
    'titular' => 'Ygor',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Jorge',
    'saldo' => 750
];

$conta3 = [
    'titular' => 'João',
    'saldo' => 10001
];

$contasCorrentes = [$conta1, $conta2, $conta3];

//echo $conta1['titular'];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}