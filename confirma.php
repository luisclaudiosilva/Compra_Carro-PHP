<?php
include("head.php");
?>

<h2>Compra</h2>

<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$carro = $_POST["carro"];

include("conexao.php");

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$carro = $_POST["carro"];

$select = "select * from cliente where nome='$nome' and idade='$idade'";
$query = pg_query($con, $select);
$resel = pg_fetch_array($query);
$idCli = $resel['id'];
//echo "Id cliente:".$idCli;

$select2 = "select * from carro where nomeCarro='$carro'";
$query2 = pg_query($con, $select2);
$resel2 = pg_fetch_array($query2);
$idCar = $resel2['idcarro'];
//echo "<br/>Id carro:".$idCar;

$select3 = "select * from compra where id='$idCli' and idCarro='$idCar'";
$query3 = pg_query($con, $select3);
$resel3 = pg_fetch_array($query3);

if(!$resel3){
	$insert = "insert into compra (id, idCarro) values ('$idCli', '$idCar')";
	$query4 = pg_query($con, $insert);

	if($query4){
		echo "<br/><br/>Compra efetuada com sucesso";

	}else{
		echo "<br/><br/>Erro na compra";
	}

}else{
	echo "<br/><br/>$nome você já comprou um $carro ";
}


pg_close($con);

?>
<br/>
<br/>
<input type="button" value="Inicio" onclick="chama();">

</div>

</body>
<?php
include("footer.php");
?>
</html>