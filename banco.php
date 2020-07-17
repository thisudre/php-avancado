<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-12' => [
        'titular' => 'Thiago',
        'saldo' => 1000
    ]
    ,
    '123.456.289-43' => [
        'titular' => 'Carlos',
        'saldo' => 100
    ],
    '123.556.789-87' => [
        'titular' => 'Marta',
        'saldo' => 10000
    ]
];

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 50);

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Contas Correntes</h1>
    <ul>
        <?php foreach($contasCorrentes as $cpf => $conta){?>
        <li><?=$conta['titular'];?> - <?=$cpf; ?> - Saldo: <?=$conta['saldo']?></li>
        <?php }?>
    </ul>
</body>
</html>