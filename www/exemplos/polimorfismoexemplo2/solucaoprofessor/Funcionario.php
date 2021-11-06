<?php

class Funcionario
{
  private $nome;
  private $cargo;
  protected $salario;

  public function calcularBonificacao()
  {
      return ($this->salario * 0.5);
  }
}