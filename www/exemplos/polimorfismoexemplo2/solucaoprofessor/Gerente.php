<?php

class Gerente extends Funcionario
{
    public function __construct(float $salario)
    {
      $this->salario = $salario;
    }
    /*
  public function calcularBonificacao()
  {
      return ($salario * 0.5) + ($salario * 0.6);
  }*/

  public function calcularBonificacao()
  {
      return parent::calcularBonificacao() + ($this->salario * 0.6);
  }
}