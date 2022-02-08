<?php
session_start();
require('header.php');

if((isset($_SESSION['aviso']))){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<a href="apagar.php">APAGAR COOKIE</a>;

<form method ="POST" action ="recebedor.php">
    <label>
        NOME:
        <br/>
        <input type ="text" name="nome"/> 
    </label>
    <br/>
    <br/>
    
    <label>
        EMAIL:
        <br/>
        <input type ="text" name="email"/> 
    </label>
    <br/>
    <br/>
    
    <label>
        IDADE:
        <br/>
        <input type="text" name="idade" />
    <label/>
    <br/>
    <br/>
    <input type="submit" value="Enviar" />

</form>
<a href="sair.php">Sair</a>;