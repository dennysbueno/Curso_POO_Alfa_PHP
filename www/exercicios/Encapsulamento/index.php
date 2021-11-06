<?php

require_once("Pessoa.php");

$pessoa = new Pessoa();

$pessoa->setNome("Dennys");
$pessoa->setCpf("65321534234");
$pessoa->setIdade(23);

echo "<pre>";
print_r($pessoa);
print_r($pessoa->alistar());
echo "<pre>";

$pessoa2 = new Pessoa();
$pessoa2->setNome("Ester")
->setCpf("35243564532")
->setIdade(22);
