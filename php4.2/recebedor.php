<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
    file_put_contents('nomes.txt', $nome."\n", FILE_APPEND);      
 }
    
 header('Location: index.php');
?>