<?php
namespace Alura\DesignPattern\Log;

class StdoutLog implements Logger
{
    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}

?>