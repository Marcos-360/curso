<?php
$qualASuaIdade = 13;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    
    echo "Você é uma Criança!";
} else if ($qualASuaIdade < $idadeMaior) {
    
    echo "Você não é um Adolescente!";
} else if ($qualASuaIdade < $idadeMelhor) {
    
    echo "Você é um Adulto!";
} else {
    
    echo "Você é um Idoso!";
}

echo "<br>";

//operador ternário, use no lugar de if, sempre que contiver uma operação simples
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"
?>