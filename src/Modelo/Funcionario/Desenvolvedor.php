<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function recebeAumento(float $valorAumento)
    {
        $this->recebeAumento($this->exibirSalarioFuncionario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500;
    }
}