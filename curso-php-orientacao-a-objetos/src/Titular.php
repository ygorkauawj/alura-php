<?php

class Titular 
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
    }

    private function validaNomeTitular(string $nome)
    {
        if (strlen($nome) <= 5)
        {
            echo "Nome muito curto! Tente novamente.";
            exit();
        }
    }

    // GETTERS E SETTERS

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}
