<?php

$a = 10;

function trocaValor($b) {
    
    $b += 50;
    
    return $b;
    
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo "<br>";

//alterado o valor no endereco de memoria
function trocaValorb(&$b) {
    
    $b += 50;
    
    return $b;
    
}

echo trocaValorb($a);
echo "<br>";
echo trocaValorb($a);
echo "<br>";
echo $a;

?>