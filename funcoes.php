<?php

function sacar(array $conta, float $valor): array
{
    if($conta['saldo'] > $valor){
        $conta['saldo'] -= $valor;
        echo "Saque realizado com sucesso." . PHP_EOL;
    }
    else{
        echo "Saldo insuficiente." . PHP_EOL;
    }

    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if($valor > 0){
        $conta['saldo'] += $valor;
        echo "Depósito realizado com sucesso." . PHP_EOL;
    }
    else{
        echo "Depósitos precisam ser positivos";
    }

    return $conta;
}