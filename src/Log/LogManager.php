<?php
namespace Alura\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        /** @var Logger $log */
        $log = $this->criarLog();
        $dataHoje = date('d/m/y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
        $log->escreve($mensagemFormatada);
    }

    abstract public function criarLog(): Logger;
}