
<?php

/*Envia notificação através do log do servidor se não pudermos
// conectar ao banco de dados.*/
/*if (!Ora_Logon($username, $password)) {
    error_log("Oracle database not available!", 0);
}*/

// Notify administrator by email if we run out of FOO
/*podemos enviar por email*/
/*if (!($foo = allocate_new_foo())) {
    error_log("Big trouble, we're all out of FOOs!", 1,
               "operator@example.com");
}*/

// another way to call error_log():
error_log("ok arrumou!" , 3, "errors.log");



?>

