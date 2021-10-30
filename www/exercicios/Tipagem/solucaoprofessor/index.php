<?php
require_once("IMC.php");

$imcUsuario = new Imc(70, 1.70);

echo $imcUsuario->calcularIMC();

echo "<br>";

echo $imcUsuario->retornarTaxaBasal();