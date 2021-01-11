<?php
namespace Alura\DesignPattern\Log;

interface Logger
{
    public function escreve(string $mensagemFormatada): void;
}

?>