<?php

class Pessoa
{
    private string $nome;
    private string $cpf;
    private int $idade;
    private DateTime $dataNasc;

    /* public function __construct(string $nome, string $cpf, int $idade, string $dataNasc)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->dataNasc = $dataNasc;
    } */

    public function getNome() : string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf() : string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade() : int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade(int $idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of dataNasc
     */ 
    public function getDataNasc() : DateTime
    {
        return $this->dataNasc;
    }

    /**
     * Set the value of dataNasc
     *
     * @return  self
     */ 
    public function setDataNasc(DateTime $dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    public function alistar() : bool
    {
        return $this->idade >= 18;
    }
}