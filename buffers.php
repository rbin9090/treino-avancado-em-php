<?php

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casamento</title>
</head>
<body>
<h2><s>Pequenininha</s>Joseane Barros</h2>
</body>
</html>
<?php

$nomeEsposa = ob_get_contents();
ob_end_clean();
echo $nomeEsposa;
?>



