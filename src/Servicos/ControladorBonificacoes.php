<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes 
{   
    private $totalBonificacoes = 0;

    public function addBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function exibirTotal(): float
    {
        return $this->totalBonificacoes;
    }
}