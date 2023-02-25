<?php


//000.000.000-00
function cpfactive($cpf){
	$expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
	return preg_match($expressao,$cpf);
}


if(isset($_POST['acao'])){
	$cpf = $_POST['cpf'];
}

if(cpfactive($cpf)){
	echo 'cpf válido';
}else{
	echo 'cpf nao é válido';
}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>validaco cpf</title>
</head>
<body>


<form method="POST">
	<input type="text" name="cpf">
	<input type="submit" name="acao" value="ok">


</form>



</body>
</html>