<?php

class Usuario
{
  public string $nomeUsuario;
  public int $idadeUsuario;
  public Endereco $endereco;
  public DataTime $dataNasc;
  public float $saldoAtual;

  public function __construct(strig $nomeUsuario, int $idadeUsuario)
  {
    $this->nomeUsuario = $nome;
    $this->idadeUsuario = $idadeUsuario;
  }
  
}