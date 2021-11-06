<?php

class Vendedor extends Funcionario
{
    public function __construct(float $salario)
    {
      $this->salario = $salario;
    }
}