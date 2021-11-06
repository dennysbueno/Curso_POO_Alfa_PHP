<?php

class Tv extends Eletrodomestico
{
   public function __construct(bool $estaLigado)
   {
       parent::__construct($estaLigado);
   }
}