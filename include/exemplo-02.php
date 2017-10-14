<?php

// inclusão de função via include
//include "inc/exemplo-01.php";

//inclusão de função via required... onde once ignora uma segunda chamada se existir
require_once 'inc/exemplo-01.php';
require_once 'inc/exemplo-01.php';

$resultado = somar(10, 20);

echo "A soma dos valores é igual a: $resultado";

?>