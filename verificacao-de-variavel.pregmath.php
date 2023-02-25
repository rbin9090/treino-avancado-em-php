<?php

$teste = "robson";
$isso = "/". @$_POST['nome']."/";
if(preg_match($isso,$teste)){
	echo "verdade";
}else{
	echo "nao tem".$isso." no nome".$teste;
}

if (isset($_POST['CONSULTE'])) {
	
}

?>

<form method="POST">
	
<ins>ok pesquise pelo nome</ins>

<input type="text" name="nome">
<button type="submit" name="CONSULTE">OK</button>

</form>