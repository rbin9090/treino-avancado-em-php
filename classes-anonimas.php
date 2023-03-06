
<?php

// Usando uma classe explícita
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// Usando uma classe anônima
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});



?>