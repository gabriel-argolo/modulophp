<?php
$array = [
    'Nome' => 'Gabriel', 'Idade' => 25,
    'Empresa' => 'CDB', 'Cor' => 'preto',
    'Profissao' => 'Cientista da Computação'
];
$chaves = array_keys($array);
$valores = array_values($array);
?>

<table border="2">

    <tr>
        <?php foreach ($chaves as $chave) : ?>
            <th>
                <b><?php echo $chave; ?></b>
            </th>
        <?php endforeach ?>
    </tr>

    <tr>
        <?php foreach ($valores as $valor) : ?>
            <td>
                <?php echo $valor; ?>
            </td>
        <?php endforeach ?>
    </tr>
</table>