<?php

abstract class Eletrodomestico
{
    private bool $estaLigado;

    protected function __construct(boll $estaLigado)
    {
        $this->estaLigado = $estaLigado;
    }

    public function ligar() : string
    {
        if($this->estaLigado)
        {
            return "Aparelho já esta ligado";
        }

        $this->estaLigado = true;
        return "Aparelho ligado";

    }

    public function desligar() : string
    {
        if(!$this->estaLigado)
        {
            return "Aparelho já esta desligado";
        }

        $this->estaLigado = false;
        return "Aparelho ligado";
    }

}