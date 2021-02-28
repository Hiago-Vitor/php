<?php

function ola($texto="Mundo", $periodo="Bom Dia"){

	return "Olá $texto! $periodo! <br>";

}

echo ola("Mundo" , "Bom Dia");
echo ola("" , "Boa Noite");
echo ola("Glaucio" , "Boa tarde");
echo ola("João" , "");


?>
