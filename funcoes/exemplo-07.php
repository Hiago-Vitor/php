<?php

function soma(float ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2);
echo '<br>';

echo soma(55, 45);
echo '<br>';

echo soma(4, 2);
echo '<br>';

echo soma(1.7, 9.9);
echo '<br>';


?>