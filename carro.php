<?php
include("head.php");
?>

<h2>Carro</h2>
<form action="compra.php" method="post">
<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];

include("conexao.php");

$select = "select * from cliente where nome='$nome'";
$query = pg_query($con, $select);
$resel = pg_fetch_array($query);

if(!$resel){
$insert = "insert into cliente (nome, idade) values ('$nome', '$idade')";
$res = pg_query($con, $insert);

if($res){
	echo "Escolha um carro: $nome <br/><br/>";
}else{
	echo "Erro ao cadastrar<br/><br/>";
}

}else{
    echo "Agora escolha um carro: $nome <br/><br/>";
}
?>
<input type="hidden" name="nome" value="<?php echo $nome; ?>"/>
<input type="hidden" name="idade" value="<?php echo $idade; ?>"/>

Carro: <input type="text" required="true" name="carro"/><br><br>

<input type="submit" value="Enviar"/>
<br><br>
<input type="button" value="Voltar" onclick="window.location.href='cliente.php';"/>
</form>
</div>

</body>
<?php
include("footer.php");
?>
</html>