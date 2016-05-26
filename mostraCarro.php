<?php
include("head.php");
?>

<h2>Carros</h2>
<?php
include("conexao.php");

$select = "select * from carro";
$query = pg_query($con, $select);
$num = pg_num_rows($query);

echo "$num carros encontrados!";

echo "<br/>";

echo "<div id='panel'><table id='tabela' border='1'><table id='tabela' border='1'>

<tr id='linha1'>
<td>Codigo</td>
<td>Carro</td>
</tr>";

while ($linha = pg_fetch_array($query)) {
	
	echo "<tr>
		 <td>".$linha['idcarro']."</td>
	     <td>".$linha['nomecarro']."</td>
	     </tr>";
}

echo "</table></div>";

pg_close($con);
?>
<br>

<input type="button" value="Inicio" onclick="chama();">

</div>

</body>
<?php
include("footer.php");
?>
</html>