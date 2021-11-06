<?php

require_once("Animal.php");
require_once("Carnivoro.php");
require_once("Onivoro.php");

$Onivoro = new Onivoro();
print_r($Onivoro->comer());

echo '<br>';

$Carnivoro = new Carnivoro();
print_r($Carnivoro->comer());
echo '<br>';
print_r($Carnivoro->DietaDiferente());