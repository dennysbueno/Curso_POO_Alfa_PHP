<?php

require_once("Livro.php");

$livro = new Livro();
$livro->autor = "Guilherme";
$livro->editora = "abril";
$livro->genero = "Ação";
$livro->titulo = " As longas tranças de um careca";

echo '<pre>';
print_r($livro);