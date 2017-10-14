<?php

$condicao = true;

while ($condicao) {
    
    $numero = rand(1,15);
    
    if ($numero === 3) {
        
        echo "TRÊS! ";
        $condicao = false;
        
    }
    
    echo $numero . " ";
    
}


?>