<?php
session_start();
require('header.php');

if((isset($_SESSION['aviso']))){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<form method ="POST" action ="recebedor.php">
    <label>
        NOME:
        <br/>
        <input type ="text" name="nome"/> 
    </label>
<input type="submit" value="Salvar" />
</form>

