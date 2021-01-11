<?php
namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(\DateTimeInterface $dateRealizacao, string $nomePrestador)
    {
        parent::__construct($dateRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}