<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0; // Atributo da Classe Conta e não de cada objeto

    public function __construct(Titular $titular) // Construtor
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() // Destrutor
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível".PHP_EOL;
            return;
        }

        $this-> saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo!".PHP_EOL;
            return;
        } 
        
        $this-> saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível".PHP_EOL;
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function exibirSaldo(): float
    {
        return $this->saldo;
    }

    public function exibirNomeTitular(): string
    {
        return $this->titular->exibirNome();
    }

    public function exibirCpfTitular(): string
    {
        return $this->titular->exibirCpf();
    }

    public static function exibirNumerodeContas(): int
    {   
        return self::$numeroDeContas; // self = classe Conta
    }

    abstract protected function percentualTarifa(): float;
    
}

