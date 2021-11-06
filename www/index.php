<?php

require_once('ProjectDir.php');
require_once('FilterDir.php');
require_once('ImpressoraDebug.php');
$projectDir = new ProjectDir(__DIR__, 'index.php');
$FilterDir = new FilterDir($projectDir);
$ImpressoraDebug = new ImpressoraDebug($FilterDir);

$ImpressoraDebug->imprimirGenerico('exemplos');
echo '<br> <br>';
$ImpressoraDebug->imprimirGenerico('exercicios');