<?php 

class Titular
{
    private CPF $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        
    } 

    public function exibirNomeTitular(): string
    {
        return $this->nome;
    }

    public function exibirCpfTitular(): string
    {
        return $this->cpf->exibirCpfTitular();
    }

    private function validarNomeTitular(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos cinco caracteres";
            exit();
        }
    }
}