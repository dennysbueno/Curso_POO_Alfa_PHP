<?php

require_once('Conta.php');
require_once('Usuario.php');
try
{
    $usuario = new Usuario(18);
    $usuario->setNomeCompleto('Renan Zanelato');
    $usuario->setUsuario('JoaoZinhoDelas');

    $conta = new Conta(123456, 100, $usuario);
    $teste = $conta->sacar(600);
    
    $conta->saldo = 1000;
    print_r($teste);
    $teste = $conta->sacar(600);
    print_r($teste);



    print_r($conta->retornaDonoDaConta());
    $conta->alterarDonoDaConta("Lucas");
    print_r($conta->retornaDonoDaConta());
}catch(Exception $e)
{
    echo 'Falhou ';
    echo '<br>';
    echo $e->getMessage();
}
