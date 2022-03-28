<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->exibirSalarioFuncionario() * 2;
    }

    public function podeAutenticar($senha): bool
    {
        return $senha === '1234';
    }
}