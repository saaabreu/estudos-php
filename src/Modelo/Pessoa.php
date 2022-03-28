<?php 

namespace Alura\Banco\Modelo;

abstract class Pessoa 
{   
    use AcessoPropriedade;

    protected $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function exibirNome()
    {
        return $this->nome;
    }

    final protected function validarNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos cinco caracteres";
            exit();
        }
    }

    public function exibirCpf()
    {
        return $this->cpf->exibirCpfTitular();
    }
}
