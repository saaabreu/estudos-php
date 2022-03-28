<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Servicos\Autenticador;
use Alura\Banco\Servicos\ControladorBonificacoes;

/*
$endereco = new Endereco('São Paulo', 'Bairro dos números', 'Rua dois', '1715');


$conta1 = new ContaPoupanca( new Titular(new CPF('428.477.487-88'), 'Aninha',$endereco));
$conta2 = new Conta( new Titular(new CPF('455.477.888-87'), 'Joazinho',$endereco));

$Mariazinha = new Titular(new CPF('448.787.452-22'), 'Mariazinha', new Endereco('São Paulo', 'Jardim Ipê', 'Rua dos Ipês Amarelos', '17A'));
$conta3 = new Conta($Mariazinha);


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
*/

$funcionario1 = new Gerente('José', new CPF('428.447.784-58'), 2000);
$funcionario2 = new Diretor('Maria', new CPF('488.578.447-44'), 2500);
$funcionario3 = new EditorVideo('Paulo', new CPF('428.447.787-87'),1000);
//$funcionario1->alterarNomeFuncionario('Vinicius');
$controlador = new ControladorBonificacoes();
$controlador->addBonificacao($funcionario1);
$controlador->addBonificacao($funcionario2);
$controlador->addBonificacao($funcionario3);

$autenticador = new Autenticador();
$autenticador->tentaLogin($funcionario2, '1234');
$autenticador->tentaLogin($funcionario1, '432');
//echo $controlador->exibirTotal();

//var_dump($funcionario1);
