<?php

$qualASuaIdade = 8;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca) {

    echo "É uma criança";

} else if ($qualASuaIdade < $idadeMaior) {

	echo "É um adolescente";

} else if ($qualASuaIdade < $idadeMelhor) {

	echo "É um adulto";

} else {

	echo "É um idoso";

}

echo "<br>";


echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";

?>