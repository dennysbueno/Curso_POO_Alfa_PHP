<?php

class Pessoa
{
    // public = o acesso do atributo
    // ex : nome o nome do atributo
    public $nome;
    public $cpf;
    public $endereco;
    public $dataNascimento;
    public $emprego;
    public $sexo;
    private $email = "renan@gmail.com";
    protected $cargo;

    //public => acessar o metodo
    // function => definir que é um metodo
    // comer ação do metodo
    // $fome parametro do metodo
    public function comer($fome)
    {
        if($fome == true)
        {
            return "vou comer";
        } 
        return "Não estou com fome agora";
    }
    
    public function pular()
    {
        return "Estou pulando";    
    }

    public function retornarDadosPessoa()
    {
        return "Meu nome é ".$this->nome.
        " Minha data de nascimento é ". $this->dataNascimento .
        " E meu cpf é ".$this->cpf;
    }

    public function retornarEmailDaPessoa()
    {
        $this->email = "renan.professor@gmail.com";
        return $this->email;
    }
    public function retornaOCargo($cargo)
    {
        $this->mudaOCargoDaPessoa($cargo);
        return $this->cargo;
    }

    private function mudaOCargoDaPessoa($cargo)
    {
        $this->cargo = $cargo;
    }

}
