<?php 

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$conta1 = new Conta( new Titular(new CPF('428.477.487-88'), 'Aninha'));
$conta2 = new Conta( new Titular(new CPF('455.477.888-87'), 'Joazinho'));

$Mariazinha = new Titular(new CPF('448.787.452-22'), 'Mariazinha');
$conta3 = new Conta($Mariazinha);
echo $Mariazinha->exibirNomeTitular().PHP_EOL;
echo $conta1->exibirNomeTitular().PHP_EOL;
echo $conta2->exibirNomeTitular().PHP_EOL;
echo $conta1->exibirCpfTitular().PHP_EOL;
echo $conta2->exibirCpfTitular().PHP_EOL;
echo $conta2->exibirSaldo().PHP_EOL;
//unset($conta1);
echo Conta::exibirNumerodeContas();