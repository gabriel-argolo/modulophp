<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$expiracao = time()+ (86400*30);

if ($nome) {
    setcookie('nome', $nome, $expiracao);
    echo 'NOME: '.$nome."<br/>";
}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';
    header ("Location: index.php");
    exit;
}
?>
<a href="sair.php">Sair</a>; 