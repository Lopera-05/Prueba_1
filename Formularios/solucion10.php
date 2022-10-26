<?php
$precio= $_POST ['precio'];
$porc = 0.2;
$des = $precio * $porc;
$subdes = $precio - $des;

if ($precio>=20000) {
    echo "con el 20% pague".$subdes;
} else {
    echo "sin descuento valor a pagar".$precio;
}
?>