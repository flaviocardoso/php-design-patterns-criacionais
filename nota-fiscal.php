<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\NotaFiscalServicoBuilder;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 300;
$item4 = new ItemOrcamento();
$item4->valor = 600;

$builder = new NotaFiscalServicoBuilder();
$notaFiscal = $builder->paraEmpresa('1237747772', 'Flavio Carodoso')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comItem($item4)
    ->comObservacoes('Esta nota fiscal foi construida com um construtor')
    ->constroi();

echo $notaFiscal->valorImposto . PHP_EOL;