<?php

$frase = "A repetição é mãe da retenção.";


$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($q);

echo "<br>";
echo substr($texto, 0, $q);
echo "<br>";
echo "$texto";


?>