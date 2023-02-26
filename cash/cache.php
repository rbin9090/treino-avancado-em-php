<?php


/**
 * 
 */
class Cache
{
	
	function readcache()
	{
		if (file_exists('cachetxt.txt')) {
		$data = jason_decode(file_get_contents('cache'));
		if($data->tempo < time()){
				//hora de criar meu cache
			echo 'criando novo cache';
				$data = ['tempo'=>time()+30,'content'=>'<h2>olá mundo </h2>'];
				file_put_contents('cachetxt', jason_encode($data));
		}
		}else{
			echo 'criando cache pela primeira vez';
				$data = ['tempo'=>time()+30,'content'=>'<h2>olá mundo </h2>'];
			file_put_contents('cachetxt', jason_encode($data));
			$data = jason_decode($data);

		}

		return $data;
	}
}


?>