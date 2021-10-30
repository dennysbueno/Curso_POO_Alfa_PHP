<?php

require_once('Usuario.php');
require_once('Endereco.php');

$nome = "Renan";
$idade = "26";
$usuario = new Usuario($nome, $idade, new Endereco());
$usuario->saldoAtual = 50.5;
print_r($usuario->retornaSaldoAtualDoUsuario());

print_r($usuario->retornaOEnderecoDoCliente());