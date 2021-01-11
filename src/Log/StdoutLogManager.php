<?php 
namespace Alura\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function criarLog(): Logger
    {
        return new StdoutLog();
    }
}