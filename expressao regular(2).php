<?php




$mydocument = "<div>


<h2>76 9999 990 09</h2>


</div>

";



//sem o parametro s o preg-MATCH SO PEGA ATÉ A PRIMEIRA QUEBRA DE LINHA.
preg_match('/(.*)/s',$mydocument,$matches);

echo htmlentities($matches[0]);









?>