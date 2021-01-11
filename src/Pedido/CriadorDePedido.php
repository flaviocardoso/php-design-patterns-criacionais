<?php 
namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $templates = [];

    public function criaPedido(
        string $nomeClient, 
        string $dataFormatada, 
        Orcamento $orcamento): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeClient, $dataFormatada);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido(
        string $nomeClient, 
        string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeClient . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $this->templates[$hash] = new TemplatePedido(
                $nomeClient, 
                new \DateTimeImmutable($dataFormatada));
        }
        
        return $this->templates[$hash];
    }
}

?>