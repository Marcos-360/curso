<?php


//com float, os numeros decimais são somados agora
function soma(float ...$valores):string {
    
    return array_sum($valores);
    
}

echo var_dump(soma(2, 3));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(19.33, 20.56);
echo "<br>";
echo soma(10, 10, 50, 80, 15);
echo "<br>";

?>