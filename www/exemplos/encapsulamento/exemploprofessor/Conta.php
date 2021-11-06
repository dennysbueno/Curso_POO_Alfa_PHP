<?

class Conta
{
    private int $idetificador;
    public float $saldo;
    private float $limite = 500;
    private Usuario $usuario;

    public function __construct(int $identificador, float $saldo, Usuario $usuario)
    {
        $this->saldo = $saldo;
        $this->identificador = $identificador;
        $this->usuario = $usuario;
    }

    public function sacar(float $valor) : bool
    {
        if(!$this->verificaPermissaoSaque($valor))
        {
            throw new Exception("Valor Excedido");
        }
        $this->saldo = $this->saldo - $valor;
        return true;
    }

    public function depositar(float $valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    private function verificaPermissaoSaque(float $valor): bool
    {  
        $valorReal = ($this->limite + $this->saldo) - $valor;
        return $valorReal >= 0;
    }

    public function retornaDonoDaConta()
    {
        return $this->usuario->getNomeCompleto();
    }

    public function alterarDonoDaConta($nome)
    {
        $this->usuario->setNomeCompleto($nome);
    }
}