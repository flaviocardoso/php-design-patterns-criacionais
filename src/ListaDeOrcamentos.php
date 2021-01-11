<?php

namespace Alura\DesignPattern;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private Orcamento $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}
