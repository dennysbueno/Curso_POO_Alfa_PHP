<?php
class Usuario
{
    public $nomeUsuario;
    public int $idadeUsuario;
    private Endereco $endereco;
    public DateTime $dataNascimento;
    public float $saldoAtual;

    public function __construct(string $nome, 
    int $idadeUsuario, 
    Endereco $endereco)
    {
        $this->nomeUsuario = $nome;
        $this->idadeUsuario = $idadeUsuario;
        $this->endereco = $endereco;
    }

    public function retornaSaldoAtualDoUsuario() : float
    {
        return $this->saldoAtual;
    }

    public function retornaOEnderecoDoCliente() : string
    {
        return $this->endereco->retornarEndereco();
    }

    public function exemplo() : string
    {
       
        return $this->endereco->retornarEndereco();
    }
}