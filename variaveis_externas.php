<?php


$nome = 'robson';
$nome2 = 'Josy';
 $teste = function() use ($nome,$nome2){
 	echo $nome2."ola estou executando a funcao com duas variaveis externas";
 };
 $teste();


?>