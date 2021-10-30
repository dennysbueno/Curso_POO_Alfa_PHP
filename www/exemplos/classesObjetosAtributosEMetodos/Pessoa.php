<?php

class Pessoa
{

    public $nome;
    public $cpf;
    public $endereco;
    public $dataNasc;
    public $profisao;
    public $sexo;
    private $email;
    protected $cargo;

    public function comer($fome)
    {
        if ($fome == true) {
            return "vou comer";
        }
        return "Não estou com foem";
    }

    public function pular()
    {
        return "Estou pulando";
    }

    public function retornarDadosPessoa()
    {
        return "Meu nome é ".$this->nome.
        " Minha data de nascimento é ".$this->dataNasc.
        " E meu cpf é ".$this->cpf;
    }

    public function retornarEmailPessoa()
    {
      $this->email = "dennys.bueno8@gmail.com";
      return $this->email;
    }

    public function retornarCargo($cargo)
    {
      $this->mudaCargoPessoa($cargo);
      return $this->cargo;
    }

    public function mudaCargoPessoa($cargo)
    {
      $this->cargo = $cargo;
    }
}
