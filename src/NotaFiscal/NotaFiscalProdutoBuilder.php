<?php
namespace Alura\DesignPattern\NotaFiscal;

class NotaFiscalProdutoBuilder extends NotaFiscalBuilder
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.02;

        return $this->notaFiscal;
    }
}

?>