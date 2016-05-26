<?php
include("head.php");
?>

<h2>Dados da compra</h2>

<form action="confirma.php" method="post">
<?php
include_once("conexao.php");

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$carro = $_POST["carro"];

$select = "select * from carro where nomeCarro='$carro'";
$query = pg_query($con, $select);
$resel = pg_fetch_array($query);

If(!$resel){
$insert = "insert into carro (nomeCarro) values ('$carro')";
$res = pg_query($con, $insert);
if($res){
	echo "$nome você escolheu um(a) $carro, <br/>confime sua compra apertando em confirmar<br/><br/>";
}else{
	echo "Erro ao cadastrar carro<br/><br/>";
}
}else{
	echo "$carro é um ótimo carro $nome <br/>Confirme sua compra clicando em 'CONFIRMAR'<br/><br/>";
}

?>
<input type="hidden" name="nome" value="<?php echo $nome; ?>" />
<input type="hidden" name="idade" value="<?php echo $idade; ?>" />
<input type="hidden" name="carro" value="<?php echo $carro; ?>" />

<input type="submit" value="Confirmar" />

<br>
<br>
<input type="button" value="Inicio" onclick="chama();"/>
</from>
</div>
</body>
<?php
include("footer.php");
?>
</html>