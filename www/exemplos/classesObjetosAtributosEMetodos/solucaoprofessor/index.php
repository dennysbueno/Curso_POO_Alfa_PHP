<?php

require_once("Pessoa.php");

$renan = new Pessoa();
$renan->nome = "Renan Zanelato";
$renan->cpf = "000.000.000-00";
$renan->dataNascimento = "26/01/1996";
$renan->emprego = "Professor";
$renan->sexo = "M";

echo '<br>';
echo $renan->retornarEmailDaPessoa();
echo '<br>';
echo $renan->retornaOCargo("Maestro");
echo "<pre>";
print_r($renan);
print_r($renan->nome);
echo '<br>';
print_r($renan->sexo);
echo '<br>';
print_r($renan->retornarDadosPessoa());
echo '<br>';
print_r($renan->pular());
echo '<br>';
print_r($renan->comer(true));
echo '<br>';
print_r($renan->comer(false));
echo '<br>';
echo $renan->mudaOCargoDaPessoa("Maestro");


$dennys = new Pessoa();
$dennys->nome = "Dennys";
$dennys->cpf = "000.000.000-00";
$dennys->dataNascimento= "Ontem";
echo '<br>';
print_r($dennys->retornarDadosPessoa());


// bad example
echo "Meu nome é DENNYS
 Minha data de nascimento é ONTEM
 E meu cpf é NULO";
