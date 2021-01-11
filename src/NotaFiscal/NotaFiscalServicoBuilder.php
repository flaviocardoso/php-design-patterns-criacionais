<?php
namespace Alura\DesignPattern\NotaFiscal;

class NotaFiscalServicoBuilder extends NotaFiscalBuilder
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }
}

?>