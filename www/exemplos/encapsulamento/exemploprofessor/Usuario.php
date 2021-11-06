<?php
class Usuario
{
    private string $nomeCompleto;
    private int $idade;
    private string $usuario;

    public function __construct(int $idade)
    {
       $this->idade = $idade;
    }
    
    public function getNomeCompleto() : string
    {
       return $this->nomeCompleto;
    }

    public function setNomeCompleto(string $nome)
    {
      $this->nomeCompleto = $nome;
    }

    public function getUsuario() : string
    {
        if($this->idade > 18)
        {
            return $this->usuario;
        }
        return $this->nomeCompleto;
    }
    public function setUsuario(string $usuario)
    {
        $this->usuario = $usuario;
    }

}