<?php 

require_once 'src/Conta.php';
require_once 'src/Pessoa.php';
require_once 'src/Funcionario.php';
require_once 'src/Titular.php';
require_once 'src/Endereco.php';
require_once 'src/CPF.php';

/*
$endereco = new Endereco('São Paulo', 'Bairro dos números', 'Rua dois', '1715');
$conta1 = new Conta( new Titular(new CPF('428.477.487-88'), 'Aninha',$endereco));
$conta2 = new Conta( new Titular(new CPF('455.477.888-87'), 'Joazinho',$endereco));

$Mariazinha = new Titular(new CPF('448.787.452-22'), 'Mariazinha', new Endereco('São Paulo', 'Jardim Ipê', 'Rua dos Ipês Amarelos', '17A'));
$conta3 = new Conta($Mariazinha);


echo $conta1->exibirNomeTitular().PHP_EOL;
echo $conta2->exibirNomeTitular().PHP_EOL;
echo $conta1->exibirCpfTitular().PHP_EOL;
echo $conta2->exibirCpfTitular().PHP_EOL;
echo $conta2->exibirSaldo().PHP_EOL;
//unset($conta1);
echo Conta::exibirNumerodeContas();
var_dump($Mariazinha);
*/

$funcionario1 = new Funcionario('José', new CPF('428.447.784-55'), 'Assistente de Marketing');
$funcionario1->alterarNomeFuncionario('Vinicius');
var_dump($funcionario1);