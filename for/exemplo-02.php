<?php

//este script causará um erro de loop infinito, pois a variável não encontra o valor 10

for ($i = 0; $i <= 10; $i--) {
    
    echo $i . " ";
    
}

?>