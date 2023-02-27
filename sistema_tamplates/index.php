<?php


include'tamplate.php';

$template = new tamplates();
$template->render(['titulo'=>'blog','nome'=>'robson'],'sobre.phtml');


?>