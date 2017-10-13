<?php

$nome = "Hcode";
$nome2 = 'Treinamentos';
$nome3 ="marcos aurelio sosnovski";
$nome4 = "efigie";

var_dump($nome, $nome2);

echo "<br>";

echo "$nome $nome2";
echo "<br>";
echo 'ABC $nome';
echo "<br>";
echo "<br>";

echo strtolower("$nome $nome2");
echo "<br>";
echo "<br>";

echo strtoupper("$nome $nome2");
echo "<br>";
echo "<br>";

echo ucwords($nome3);
echo "<br>";
echo "<br>";

echo ucfirst($nome3);
echo "<br>";
echo "<br>";

echo str_replace("e", "3", $nome4);
echo "<br>";
echo "<br>";
?>