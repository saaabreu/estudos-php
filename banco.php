<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Funcionario;


$endereco = new Endereco('São Paulo', 'Bairro dos números', 'Rua dois', '1715');


$conta1 = new ContaPoupanca( new Titular(new CPF('428.477.487-88'), 'Aninha',$endereco));
/*$conta2 = new Conta( new Titular(new CPF('455.477.888-87'), 'Joazinho',$endereco));

$Mariazinha = new Titular(new CPF('448.787.452-22'), 'Mariazinha', new Endereco('São Paulo', 'Jardim Ipê', 'Rua dos Ipês Amarelos', '17A'));
$conta3 = new Conta($Mariazinha);*/


echo $conta1->exibirNomeTitular().PHP_EOL;
echo $conta1->exibirCpfTitular().PHP_EOL;
echo $conta1->exibirSaldo().PHP_EOL;
$conta1->depositar(100).PHP_EOL;
$conta1->sacar(15).PHP_EOL;
echo $conta1->exibirSaldo().PHP_EOL;

//echo $conta2->exibirNomeTitular().PHP_EOL;
//echo $conta2->exibirCpfTitular().PHP_EOL;
//echo $conta2->exibirSaldo().PHP_EOL;
//unset($conta1);
//echo Conta::exibirNumerodeContas();
//var_dump($Mariazinha);

/*
$funcionario1 = new Funcionario('José', new CPF('428.447.784-558'), 'Assistente de Marketing');
$funcionario1->alterarNomeFuncionario('Vinicius');
var_dump($funcionario1);*/
