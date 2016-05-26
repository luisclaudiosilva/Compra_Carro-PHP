<?php
include("head.php");
?>

<h2>Compras</h2>
<?php
include("conexao.php");



$select = "select compra.idCompra, cliente.nome, carro.nomeCarro from compra inner join cliente on cliente.id = compra.id inner join carro on carro.idcarro = compra.idCarro order by compra.idCompra asc";
$query = pg_query($con, $select);
$num = pg_num_rows($query);

echo "$num compras encontrada(s)</br></br>";

echo "<div id='panel'><table id='tabela' border='1'>
<tr id='linha1'>
		<td>Codigo</td>
		<td>CLIENTE</td>
		<td>CARRO</td>
</tr>";

while ($linha = pg_fetch_array($query)) {
	echo "<tr>
			<td>".$linha['idcompra']."</td>
			<td>".$linha['nome']."</td>
			<td>".$linha['nomecarro']."</td>

	</tr>";
}

echo "</table></div>";

pg_close($con);
?>

<input type="button" value="Inicio" onclick="chama();"/> 

</div>


</body>

<?php
include("footer.php");
?>
</html>