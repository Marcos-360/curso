<?php

//session_start();
require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {
    
    case PHP_SESSION_DISABLED;
    echo "as sessões estão desabilitadas";
    break;
    
    case PHP_SESSION_NONE;
    echo "as sessões estão habilitadas, porém não existe nenhuma ativa";
    break;

    case PHP_SESSION_ACTIVE;
    echo "as sessões estão habilitadas, existe uma sessão ativa";
    break;
}
?>