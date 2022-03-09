<?php
//database connection
$database = mysqli_connect("localhost", "root", "",);
mysqli_select_db($database, "agenda");

$resultado = mysqli_query($database, 'SELECT * FROM contato');

if ($linha = mysqli_fetch_array($resultado)) {
    do {
       $id = $linha["id"];
       $nome = $linha["nome"];
       $sobrenome = $linha["sobrenome"];
       $cidade = $linha["cidade"];
       $email = $linha["email"];
       $tel = $linha["telefone"];

       //html format style  
       echo "<table border='1' width=100%>";
       echo "<tr>";
       echo "<td align=20%><font color=blue>ID</font></td><td align=20%><font color=red>NOME</font></td>";
       echo "<td align=20%><font color=red>SOBRENOME</font></td>";
       echo "<td align=20%><font color=red>CIDADE</font></td>";
       echo "<td align=20%><font color=red>EMAIL</font></td>";
       echo "<td align=20><font color=red>TELEFONE</font></td></tr>";
       echo "<tr><td align=20%>$id</td><td align=20%>$nome</td><td align=20%>$sobrenome</td><td align=20%>$cidade</td><td align=20%>$tel</td></tr>";
    } while ($linha = mysqli_fetch_array($resultado));
} else {
    print "Nenhum dado foi encontrado";
}
