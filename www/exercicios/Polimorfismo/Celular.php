<?php

class Celular extends Produto
{
    public function __construct()
    {
        parent::setValor(100);
    }

    public function precoProduto()
    {
        return parent::precoProduto()
        + (parent::precoProduto * 0.5);
    }
}