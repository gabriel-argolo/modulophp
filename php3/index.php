<?php

function somar($numero1, $numero2, $numero3 = 0) {
    $total = $numero1 + $numero2 + $numero3;
    return $total;
}
echo $soma = somar(1, 1);

echo '<hr/>';

$dizimo = function (int $valor) {
    return $valor * 0.1;
};

echo $dizimo(80);

echo '<hr/>';

$dizimo2 = fn ($valor) => $valor * 0.1;
echo $dizimo2(80);

function dividir($valor) {
    $metade = $valor/2;
    echo $metade.'<br/>';
    if(round($metade) > 0){
        dividir($metade);
    }
}
echo $exemplo = dividir(100); 

echo '<hr>';
/*echo date('d/m/y h:i:s');

$data = '2020-03-21';
$time  = strtotime($data);
echo date('d-m-y', $time);
*/
echo '<hr>';

function retornaData($data){
$time = strtotime($data);
$d = date('N', $time);
    switch ($d) {
        case '1':
            echo 'Segunda-feira';
            break;
        case '2':
            echo 'Terça-feira';
            break;
        case '3':
            echo 'Quarta-feira';
            break;
        case '4':
            echo 'Quinta-feira';
            break;
        case '5':
            echo 'Sexta-feira';
            break;
        case '6':
            echo 'Sabado';
            break;
        case '7':
            echo 'Domingo';
            break;
    }
}
$data = ('2022-02-03');
retornaData($data);