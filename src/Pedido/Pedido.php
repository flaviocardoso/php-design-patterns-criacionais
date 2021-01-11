<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class Pedido
{
    /** @var TemplatePedido $template */
    public TemplatePedido $template;
    public Orcamento $orcamento;
}
