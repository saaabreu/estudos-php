<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionario\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha))
        {
            echo 'ok, usuário logado';
        } else {
            echo 'ops, senha incorreta';
        }
    }
}