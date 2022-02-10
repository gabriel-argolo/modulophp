<form method ="POST" action ="recebedor.php">
    <label>
        NOME:
        <br/>
        <input type ="text" name="nome"/> 
    </label>
<input type="submit" value="Salvar" />
<br/>

</form>

<?php

if(file_exists("nomes.txt")){
$listaNomes = file_get_contents("nomes.txt");
$arrayNomes = explode("\n",$listaNomes);

'<ul>';
    foreach ($arrayNomes as $nomes) {
        echo '<li>'.$nomes.'<li\>'; 
    }
'<ul\>';

}

?>