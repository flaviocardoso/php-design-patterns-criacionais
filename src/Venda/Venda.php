<?php 
namespace Alura\DesignPattern\Venda;

class Venda
{
    private \DateTimeInterface $dateRealizacao;

    public function __construct(\DateTimeInterface $dateRealizacao)
    {
        $this->dateRealizacao = $dateRealizacao;
    }
}

?>