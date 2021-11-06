<?php

class Calculadora
{
    public function somar(float $numero1, float $numero2) : float
    {
        return $numero1+$numero2;
    }

    public function subtrair(float $numero1, float $numero2): float
    {
        return $numero1 - $numero2;
    }

    public function dividir(float $numero1, float $numero2): float
    {
        return $numero1 / $numero2;
    }

    public function multiplicar(float $numero1, float $numero2): float
    {
        return $numero1 * $numero2;
    }
}