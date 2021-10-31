<?php

require_once ("Livro.php");

$livro = new Livro();
$livro->nome = "Arte da Guerra";
$livro->autor = "Sun Tsu";
$livro->editora = "ANUM";

print_r($livro);