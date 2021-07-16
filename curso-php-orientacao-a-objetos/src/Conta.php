<?php

class Conta 
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        echo "Criando nova conta" . PHP_EOL;
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSaque) : void
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível." . PHP_EOL;
            return;
        } 
        $this->saldo -= $valorSaque;
        echo "Operação realizada com sucesso!" . PHP_EOL; 
    }

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
            echo "Operação realizada com sucesso!" . PHP_EOL;
            return;
        }
        echo "Você não pode depositar um valor negativo." . PHP_EOL;
    }

    public function transferir(float $valorATansferir, Conta $contaDestino): void
    {
        if ($valorATansferir <= 0) {
            echo "Não é possível transferir um valor negativo." . PHP_EOL;
            return;
        } else if ($valorATansferir > $this->saldo) {
            echo "Saldo insuficiente." . PHP_EOL;
            return;
        }
        $this->sacar($valorATansferir);
        $contaDestino->depositar($valorATansferir);
        echo "Transferência realizada!" . PHP_EOL;
    }

    public static function numeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    // GETTERS E SETTERS

    public function getSaldo()
    {
        return $this->saldo . PHP_EOL;
    }

    public function getNomeTitular()
    {
        return $this->titular->getNome() . PHP_EOL;
    }

    public function getCpfTitular()
    {
        return $this->titular->getCpf() . PHP_EOL;
    }   
}