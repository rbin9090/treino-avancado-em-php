<?php


$nome = 'robson';

class teste

{

	public function globalTeste(){
		global $nome;
		echo $nome;
	}
}


$ok = new teste;
$ok->globalTeste();



?>