<?php 
namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    /** @var int $pesoProduto Peso do produto em gramas */
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dateRecebido, int $pesoProduto)
    {
        parent::__construct($dateRecebido);
        $this->pesoProduto = $pesoProduto;
    }
}