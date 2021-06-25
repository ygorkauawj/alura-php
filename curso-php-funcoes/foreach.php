<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Ygor',
        'saldo' => 10000
    ],
    10987654321 => [
        'titular' => 'Jorge',
        'saldo' => 750
    ], 
    10192837465 => [
        'titular' => 'João',
        'saldo' => 10001
    ]
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf -> " . $conta['titular'] . PHP_EOL;
}