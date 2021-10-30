<?php

class Animal
{
    public $raca;
    public $cor;

    public function comer()
    {
        return "Estou comendo";
    }

    public function obterRaca()
    {
        return 'Minha raça é '.$this->raca;
    }
}