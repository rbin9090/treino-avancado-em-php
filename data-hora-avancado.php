<?php

//aqui pego momento atual e adiciono mais tempo
date_default_timezone_set('America/Sao_Paulo');
echo date('d-m-y',time()+60*60*24); 

   





  /* //Creating a DateTime object // posso determinar uma hora e dia 
   $date = "01-Apr-1990";
   $format = "d-M-Y";
   $tz = new DateTimeZone('America/Sao_Paulo');  
   $res = date_create_from_format($format, $date, $tz);

   print date_format($res, "d-M-Y H:i:s");

*/

   
?>
  
