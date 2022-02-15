<?php
$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item)
{
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce ($numeros, 'somar');
echo $total;

$array = ['Gabriel', 25, 'Café', 'Preto'];

list($nome, $idade, $bebida, $cor)=$array;  

echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor;