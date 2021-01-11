<?php 
namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }
    public function criarLog(): Logger
    {
        return new FileLog($this->caminhoArquivo);
    }
}