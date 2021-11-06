<?php
require_once('Calculadora.php');

$conta = 1+2;
$conta = 1+4;
$conta = $conta+6;
$conta = $conta-1;
$conta = $conta*6;

$conta = new Calculadora();

$valorInicial = $conta->somar(1,1);
echo '<br>';
print_r($conta->somar(1,1));
echo '<br>';
print_r($conta->somar($valorInicial, $valorInicial));
echo '<br>';
print_r($conta->subtrair($valorInicial,1));
echo '<br>';
print_r($conta->multiplicar($valorInicial, 10));
print_r($conta->dividir($valorInicial,  2));