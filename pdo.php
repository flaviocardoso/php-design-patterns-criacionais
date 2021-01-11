<?php

use Alura\DesignPattern\PDOConnection;

require 'vendor/autoload.php';

$pdo = PDOConnection::getInstance ('sqlite::memory');
$pdo2 = PDOConnection::getInstance ('sqlite::memory');

var_dump($pdo, $pdo2);