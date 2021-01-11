<?php
namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImposto;

    public function valor(): float 
    {
        return array_reduce(
            $this->itens, 
            fn (float $valorAcumulado, ItemOrcamento $itemAtual) => $valorAcumulado + $itemAtual->valor,
            0
        );
    }

    public function clonar(): NotaFiscal
    {
        $cloneNotaFinal = new NotaFiscal();
        $cloneNotaFinal->cnpjEmpresa = $this->cnpjEmpresa;
        $cloneNotaFinal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $cloneNotaFinal->itens = $this->itens;
        $cloneNotaFinal->observacoes = $this->observacoes;
        $cloneNotaFinal->dataEmissao = $this->dataEmissao;
        $cloneNotaFinal->valorImposto = $this->valorImposto;

        return $cloneNotaFinal;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}

?>