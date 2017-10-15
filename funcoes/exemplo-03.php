<?php

//normalmente toda função deve retornar algum valor...
function ola($texto)
{
    return "Olá $texto!<br>";
}

echo ola("Mundo");
echo ola("Marcos");
echo ola("Raphaela");

echo "<br>";
echo "<br>";


//funcoes atribuindo parametros

function olaMais($texto = "mundo", $periodo = "Bom dia")
{
    return "Olá $texto, $periodo<br>";
}

echo olaMais();
echo olaMais("Marcos", "Boa noite");
echo olaMais("Raphaela", "Boa tarde");
echo olaMais("João", "");

echo "<br>";
echo "<br>";

function olaMm($texto, $periodo = "Bom dia")
{
    return "Olá $texto, $periodo<br>";
}

echo olaMm("Mundo");
echo olaMm("Marcos", "Boa noite");
echo olaMm("Raphaela", "Boa tarde");
echo olaMm("João", "");

echo "<br>";
echo "<br>";

function olaMa($texto = "mundo", $periodo)
{
    return "Olá $texto, $periodo<br>";
}

echo olaMa("Mundo", "Bom dia");
echo olaMa("Marcos", "Boa noite");
echo olaMa("Raphaela", "Boa tarde");
echo olaMa("João", "");
?>