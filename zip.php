<?php

require 'vendor/autoload.php';

$orcamentoZip = new \Alura\DesignPattern\Relatorio\ArquivoZipExportado('orcamento');
$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 500;
$orcamentoExportado = new \Alura\DesignPattern\Relatorio\OrcamentoExportado($orcamento);

$orcamentoZip->salvar($orcamentoExportado);