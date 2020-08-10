<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$rafael = new Titular(New CPF("123.456.789-10"), "Rafael Aquino Risalte");
$primeiraConta =  new Conta($rafael);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$fabricie = new Titular( New CPF("987.654.321-10"), "Fabricie Pereira Martins");
$segundaConta = new Conta($fabricie);

$primeiraConta->transfere(50, $segundaConta);

var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();
