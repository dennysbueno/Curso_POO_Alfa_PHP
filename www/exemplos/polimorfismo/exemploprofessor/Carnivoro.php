<?php

class Carnivoro extends Animal
{
    public function comer()
    {
        return "Eu Só Como Carne";
    }

    public function DietaDiferente()
    {
        return parent::comer();
    }
}