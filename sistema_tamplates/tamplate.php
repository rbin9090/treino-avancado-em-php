<?php

class tamplates
{

	public function render($arr,$file){
		$arquivo = file_get_contents('../sistema_tamplates/'.$file);

		foreach ($arr as $key => $value) {
		$arquivo = str_replace('{'.$key.'}', $value, $arquivo);
	}
		echo $arquivo;
	}
}







?>