<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorSaque) {
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insuficiente.");
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
};

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

$contasCorrentes[10987654321] = sacar($contasCorrentes[10987654321], 500);
$contasCorrentes[12345678910] = sacar($contasCorrentes[12345678910], 150);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}