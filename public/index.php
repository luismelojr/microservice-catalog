<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Teste;

$teste = new Teste();
echo $teste->poll();

echo __DIR__;
