<?php
$idade = 18;

if($idade < 18){
    echo "menor de idade";
}else{
    echo "maior de idade";
}
echo '<hr>';

//Operador ternario

$resultado = ($idade < 18) ? "menor de idade":"maior de idade";
echo ($resultado);

echo '<hr>';

$nome = "Gabriel";
$sobrenome = null;

$nomeCompleto = $nome ?? "Visitante";
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;

echo '<hr>';
//Switch
$tipo = 'foto';

switch ($tipo) {
    case 'foto':
        echo 'exibindo foto';
        break;
    case 'video':
        echo 'exibindo video';
        break;
    case 'video':
        echo 'exibindo foto';
        break;
    case 'texto':
        echo 'exibindo texto';
        break;
}
echo "<hr>";

$numero = 0;

while ($numero < 10) {
    echo "N: ". $numero++. "<br/>";
}
?>