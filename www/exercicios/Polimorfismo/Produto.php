<?php

abstract class Produto
{
    private float $valor;

    
    protected function __construct($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    protected function precoProduto(float $valor)
    {
        return ($this->valor = $valor);
    }



    
}