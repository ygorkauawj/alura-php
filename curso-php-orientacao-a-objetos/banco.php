<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$ygor = new Titular('Ygor Barcelos', new Cpf('123.456.789-10'));
$primeiraConta = new Conta($ygor);
$primeiraConta->depositar(500);

echo $primeiraConta->getSaldo();
echo $primeiraConta->getNomeTitular();
echo $primeiraConta->getCpfTitular();

$jorge = new Titular('Jorge Henrique', new Cpf('987.654.321-10'));
$segundaConta = new Conta($jorge);

echo $segundaConta->getSaldo();
echo $segundaConta->getNomeTitular();
echo $segundaConta->getCpfTitular();

echo Conta::numeroDeContas();