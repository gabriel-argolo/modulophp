<?php
$db = new mysql_connect("localhost", "root")

mysql_select_db("contato", $db);

$resultado = mysql_query("SELECT * FROM contato", $db);

if ($linha = mysql_fetch_array($resultado)) {
    do {
       $id = $linha["id"];
       $nome = $linha["nome"];
       $sobrenome = $linha["sobrenome"];
       $cidade = $linha["cidade"];
       $tel = $linha["telefone"];
       //formatação dos dados numa tabela HTML
       echo "<table border='1' width=100%>";
       echo "<tr>";
       echo "<td align=20%><font color=blue>ID</font></td><td align=20%><font color=red>NOME</font></td>";
       echo "<td align=20%><font color=red>SOBRENOME</font></td>";
       echo "<td align=20%><font color=red>CIDADE</font></td>";
       echo "<td align=20><font color=red>TELEFONE</font></td></tr>";
       echo "<tr><td align=20%>$id</td><td align=20%>$nome</td><td align=20%>$sobrenome</td><td align=20%>$cidade</td><td align=20%>$tel</td></tr>";
    } while ($linha = mysqli_fetch_array($resultado));
} else {
    print "Nenhum dado foi encontrado";
}
?>