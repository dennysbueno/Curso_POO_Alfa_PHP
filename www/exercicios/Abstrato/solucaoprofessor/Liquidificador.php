<?php

class Liquidificador extends Eletrodomestico
{
    public function __construct(bool $estaLigado)
    {
        parent::__construct($estaLigado);
    }
}