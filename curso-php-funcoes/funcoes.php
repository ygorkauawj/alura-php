<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorSaque): array {
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insuficiente.");
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
};

function depositar (array $conta, float $valorDeposito): array {
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem("Não é possível depositar valores negativos");
    }
    return $conta;
}

function letrasMaiusculas (&$conta) {
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta (array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
};