<?php
/*se minha variavel é setada ola robson se nao ola visitante*/

//$nome = 'robson';

$mensagem = 'ola'. (isset($nome) ? $nome : 'visitante');

echo $mensagem;




?>