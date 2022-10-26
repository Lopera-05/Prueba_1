<?php
$ganar = $_POST ['gana'];
$perder = $_POST ['pierde'];
$empatar = $_POST ['empata'];
$ganado = 3;
$perdido = 0;
$empatado = 2;
$g1 = $ganar * $ganado;
$p2 = $perder * $perdido;
$em3 = $empatar * $empatado;
$suma = $g1 + $p2 + $em3;

echo "Puntos obtenidos"." "."ganados"." "."$g1"." + perdidos"." "."$p2"." + empatados"." "."$em3"." "."="." "."$suma";
?>