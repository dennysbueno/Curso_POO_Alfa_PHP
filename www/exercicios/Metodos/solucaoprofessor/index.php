<?php

require_once("Animal.php");

$animal = new Animal();

$animal->raca = "PitBull";
$animal->cor = "Preto";

echo '<pre>';
print_r($animal);
echo $animal->comer();

echo '<br>';

echo $animal->obterRaca();