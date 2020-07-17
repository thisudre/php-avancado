<?php
$contasCorrentes = [
    123456789 => [
        'titular' => 'Thiago',
        'saldo' => 1000
    ]
    ,
    123456289 => [
        'titular' => 'Carlos',
        'saldo' => 100
    ],
    123556789 => [
        'titular' => 'Marta',
        'saldo' => 10000
    ]
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}