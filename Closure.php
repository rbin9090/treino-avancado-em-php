<?php

/*
class teste
{
//assim que a funcao e chamada como uma variavel é cosiderada Clousure no OO
// uma closure lhe dá acesso ao escopo de uma função externa a partir de uma função interna.


	public function returnmensage($n){
		if ($n instanceof Closure) {
			$n();
		}
	}
		public function algo(){
			echo 'estou chamando algo...';
		}
}


$teste = new teste();


$teste->returnmensage(function(){
	echo "ola mundo";
});
*/
/*
$deleteDirectory = null;
$deleteDirectory = function($path) use (&$deleteDirectory) {
    $resource = opendir($path);
    while (($item = readdir($resource)) !== false) {
        if ($item !== "." && $item !== "..") {
            if (is_dir($path . "/" . $item)) {
                $deleteDirectory($path . "/" . $item);
            } else {
                unlink($path . "/" . $item);
            }
        }
    }
    closedir($resource);
    rmdir($path);
};
$deleteDirectory("path/to/directoy");
?>




