<?php

/*variaveis externas como referencia*/

class Index
{
	public function index1(){
		echo 'chamando funcao 1';
	}
}


$getindex = new Index();
$getindex->index1();
$getIndex2 = new class2(); 
$getIndex2->getIndex2();

class class2
{
	public function getIndex2(){
		echo 'chamando funcao 2';
	}

	public function CallBack($par){
		$par();
	}
}

$call = new class2;
$call->CallBack(function(){
echo 'funcao call com pareametro externo';
});

?>