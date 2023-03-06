<?php

$valor = $_POST['nome'] ?? $_POST['outra coisa'] ?? 'nada deu certo :(';

echo $valor;

//caso eu utilize os dois pontos apos interrogacao como ex: (?:), quero dizer que também nao
//aceito que o valor seja falso. 





?>