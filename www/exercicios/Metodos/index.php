<?php

require_once("Animal.php");

$animal = new Animal();
$animal->especie = "Canino";
$animal->cor = "Marrom";

echo "<pre>";
print_r($animal);
echo "<br>";
echo $animal->comer(fome: true);
echo "<br>";
echo $animal->andar();