<?php

$conta1 = [
    'titular' => 'Thiago',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Carlos',
    'saldo' => 100
];

$conta3 = [
    'titular' => 'Marta',
    'saldo' => 10000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}