<?php

class Imc
{
  public float $peso;
  public float $altura;
  public string $sexo;
  public int $idade;

  public function __construct(float $peso, float $altura, string $sexo, int $idade)
  {
    $this->peso = $peso;
    $this->altura = $altura;
  }

  public function imcUsuario (float $peso, float $altura)
  {
    $imc = $peso / ($altura * $altura);

    return $imc;
  }

  public function tabelaIcm($icm)
  {
    if ($imc < 18.5)
    {
      echo "<p>Abaixo do peso</p>";
    }
  }
}