<?php 

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function exibirCargoFuncionario()
    {
        return $this->cargo;
    }

    public function alterarNomeFuncionario(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }
}

