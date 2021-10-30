<?php

require_once ("Pessoa.php");

$dennys = new Pessoa();
$dennys->nome = "Dennys Bueno";
$dennys->cpf = "653.389.304-34";
$dennys->dataNasc = "03-09-1998";
$dennys->profisao = "Vendedor";
$dennys->sexo = "M";

echo "<pre>";
print_r($dennys);
echo "<br>";
print_r($dennys->retornarDadosPessoa());
echo "<br>";
print_r($dennys->pular(true));
echo "<br>";
print_r($dennys->comer(true));
echo "<br>";
print_r($dennys->comer(false));
echo "<br>";
print_r($dennys->retornarEmailPessoa());
echo "<br>";
print_r($dennys->mudaCargoPessoa("Programador"));

exit;