<?php

class Animal
{
  public $especie;
  public $cor;

  public function comer($fome)
  {
    if ($fome == true) {
      return "Comendo";
    }
    return "Nao quer comer agora";
  } 

  public function andar()
  {
    return "4 passos";
  }

}