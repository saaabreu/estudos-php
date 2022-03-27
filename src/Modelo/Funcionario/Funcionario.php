<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function exibirCargoFuncionario()
    {
        return $this->cargo;
    }

    public function exibirSalarioFuncionario()
    {
        return $this->salario;
    }

    public function alterarNomeFuncionario(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento) {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

}

