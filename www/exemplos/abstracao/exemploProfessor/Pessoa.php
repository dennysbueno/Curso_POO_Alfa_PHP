<?php

abstract class Pessoa
{
    private string $nome;
    private string $cpf;
    private int $idade;
    private DateTime $dataNascimento;

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }

    public function getDataNascimento() : DateTime
    {
        return $this->dataNascimento;
    }

    public function getIdade() : int
    {
        return $this->idade;
    }

    public function setNome( string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function setDataNascimento(DateTime $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
        return $this;
    }

    abstract function alistar();


    public function RetornarIdade()
    {
      $dataAtual = new DateTime('now');
      
      return $this->dataNascimento->diff($dataAtual);
    }
}