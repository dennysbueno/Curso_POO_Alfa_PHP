<?php

class ImpressoraDebug
{
    private FilterDir $_filterDir;
    
    public function __construct(FilterDir $filterDir)
    {
        $this->_filterDir = $filterDir;
    }

    public function imprimirGenerico(string $nome)
    {
        echo '<b> '.ucfirst($nome).' </b> <br>';

        foreach($this->_filterDir->getArrayByFilterTag($nome) as $nomePasta => $diretorio)
        {
            echo '<br>';
            echo "<a href='$diretorio'> $nomePasta </a>";
        }
    }
}