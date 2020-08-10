<?php


class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNumeroCPF(): string
    {
        return $this->cpf->recuperaNumeroCPF();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres." . PHP_EOL;
            exit();
        }
    }
}