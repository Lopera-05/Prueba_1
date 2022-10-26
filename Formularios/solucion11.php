<?php
$arti= $_POST ['articulo'];
$porc = 0.15;
$des = $arti * $porc;
$subdes = $arti + $des;

echo "vendalo en".$subdes." ". "pesos para ganar el 15%";

?>