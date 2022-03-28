<?php 

namespace Alura\Banco\Modelo;

class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function exibirCidade(): string
    {
        return $this->cidade;
    }
    
    public function exibirBairro(): string
    {
        return $this->bairro;
    }

    public function exibirRua(): string
    {
        return $this->rua;
    }

    public function exibirNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'exibir' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}