<?php
//SELEÇÃO DOS DADOS QUE SERÃO INSERIDOS
$sql = "INSERT INTO contato (nome, sobrenome, cidade, email, telefone)
VALUES('$nome', '$sobrenome', '$cidade', '$email', '$telefone')";

//CONEXAO COM BANCO
$con = mysqli_connect("localhost","root") or die("Wrong database config!");

//SELEÇAO DO BANCO
mysqli_select_db($session, "agenda") or die ("Database not found!");

//INSERÇÃO DOS DADOS
mysqli_query($session, $con) or die ("<font style = Arial color=red><h1>Database record error</h1></font>");
echo ("<font style =  Arial color =green><h1>Database record OK!</h1></font>");

?>