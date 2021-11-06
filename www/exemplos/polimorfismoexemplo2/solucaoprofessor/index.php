<?php

require_once('Funcionario.php');
require_once('Gerente.php');
require_once('Vendedor.php');

$Gerente = new Gerente(10);
$Vendedor = new Vendedor(10);

print_r($Vendedor->calcularBonificacao());

echo '<br>';
print_r($Gerente->calcularBonificacao());