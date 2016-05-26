
function chama(){
	window.location.href="index.php";
}

function validar(dom,tipo){
	switch(tipo){
		case'num':var regex=/[A-Za-z]/g;break;
		case'text':var regex=/\d/g;break;
	}
	dom.value=dom.value.replace(regex,'');
}

function validaform(){


if(document.getElementById("idade").value.length == "")
	{
		alert('Por favor, preencha o campo idade');
		document.getElementById("idade").focus();
		return false
	}
}
