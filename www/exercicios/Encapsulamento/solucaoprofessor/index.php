<?php

require_once('Pessoa.php');

$pessoa = new Pessoa();

$pessoa->setNome("Renan");
$pessoa->setIdade("18");
$pessoa->setCpf("099099099099");

echo '<pre>';
print_r($pessoa);
print_r($pessoa->alistar());
echo '</pre>';

$pessoa2 = new Pessoa();
$pessoa2->setNome("Joao")
->setIdade(18)
->setDataNascimento(new DateTime('26-01-1996'));

echo '<pre>';
print_r($pessoa2);

print_r($pessoa2->RetornarIdade());