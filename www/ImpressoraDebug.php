<?php

class ImpressoraDebug
{
    private FilterDir $_filterDir;
    
    public function __construct(FilterDir $filterDir)
    {
        $this->_filterDir = $filterDir;
    }

    public function imprimirExemplos()
    {
        return $this->imprimirGenerico($this->_filterDir->getArrExamples(), 'Exemplos');
    }

    public function imprimirExercicios()
    {
        return $this->imprimirGenerico($this->_filterDir->getArrExercicios(), 'Exercicios');
    }

    private function imprimirGenerico(array $arr, string $nome)
    {
        echo "<b> $nome </b> <br>";

        foreach($arr as $nomePasta => $diretorio)
        {
            echo '<br>';
            echo "<a href='$diretorio'> $nomePasta </a>";
        }
    }
}