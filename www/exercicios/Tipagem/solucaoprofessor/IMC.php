<?php

class IMC
{
    private float $peso;
    private float $altura;
    public string $sexo;
    public int $idade;

    public function __construct(float $peso, float $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC()
    {
        $imc = $this->peso / ($this->altura * $this->altura);
        return round($imc,2);        
    }

    public function retornarTaxaBasal()
    {
        $imc = $this->calcularIMC();
        if($imc < 18.5)
        {
            return "Abaixo do peso";
        } 
        
        if($imc >= 18.5 && $imc <= 24.9)
        {
            return "Peso normal";
        }
            
        if($imc >= 25 && $imc <= 29.9)
        {
            return "Pré-obesidade";
        }
                
        if($imc >= 30 && $imc <= 34.9)
        {
            return "Obesidade Grau 1";
        }   
                    
        if($imc >= 35 && $imc <= 39.9)
        {
            return "Obesidade Grau 2";  
        }
        
        return "Obesidade Grau 3"; 
    }
}