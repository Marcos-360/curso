<?php

//normalmente toda função deve retornar algum valor...
function ola()
{
    return "Olá Mundo!<br>";
}

echo ola();
$frase = ola();

echo strlen($frase) . " caracteres foram digitados.";

?>