<?php

include_once("conexao.php");
include_once("mostra.php");

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$carro = $_POST["carro"];

$sql1 = "select * from cliente where nome='$nome' and idade=''$idade";
$res = pg_query($con, $sql1);
$linha = pg_fetch_array($res);

if($linha){
	echo "<br/><br/>Cliente já existe!";
	pg_close($con);

}
else{

$sql = "insert into cliente (nome, idade) values ('$nome', '$idade')";

$resultado = pg_query($con, $sql);

if($resultado){
	echo "<br/><br/>Cliente cadastrado com sucesso!";
}
else{
	echo "<br/><br/>Erro ao cadastrar!";
}

pg_close($con);

}

?>
