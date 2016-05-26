<?php
include("head.php");
?>

<h2>Cliente</h2>
<form action="carro.php" method="post" onsubmit="return validaform(this);">
Nome: <input type="nome" required="true" name="nome" id="nome"/><br><br>
Idade: <input type="number" id="idade" name="idade" onkeyup="validar(this,'num');"/><br><br>

<input type="submit" value="Confirmar"/>
</form>
<br>
<br>
<input type="button" value="Inicio" onclick="chama();" />
</div>

</body>
<?php
include("footer.php");
?>
</html>