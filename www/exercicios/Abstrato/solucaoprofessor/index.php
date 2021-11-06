<?php

require_once('Eletrodomestico.php');
require_once('Tv.php');
require_once('Liquidificador.php');

$tv = new Tv(true);

echo $tv->ligar();
echo '<br>';
echo $tv->desligar();
echo '<br>';
echo $tv->desligar();
echo '<br>';
echo $tv->ligar();
echo '<br>';

$liq = new Liquidificador(false);