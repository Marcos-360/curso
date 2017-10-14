<?php

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);

echo "<br>";
echo substr($texto, 0, $q);
echo "<br>";
echo "$texto";

echo "<br>";
echo "$texto2";

?>