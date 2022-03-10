<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$mail = $_POST['email'];
$telefone = $_POST['telefone'];

//dados que serão incluidos
$sql = "INSERT INTO contato (nome, sobrenome, cidade, email, telefone) 
VALUES ('$nome', '$sobrenome', '$cidade', '$mail', '$telefone')";

//conexão com o banco de dados
$con = mysqli_connect("localhost", "root") or die("Configuração de Banco de Dados Errada!");

//Selecionando o banco de dados...
mysqli_select_db($con, "agenda") or die("Banco de Dados Inexistente!");

//Inserindo os dados
mysqli_query($con, $sql) or die("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>");

echo "<font style=Arial color=green><h1>Cadastro efetuado com sucesso!</h1></font>";

