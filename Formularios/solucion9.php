<?php
$n1= $_POST ['n1'];
$n2 = $_POST ['n2'];
$n3= $_POST ['n3'];
$por1 = 0.3;
$por2 = 0.3;
$por3 = 0.4;
$res1 = $n1 * $por1;
$res2 = $n2 * $por2;
$res3 = $n3 * $por3;
$suma = $res1 + $res2 + $res3;

if ($suma>=4.0) {
    echo $suma." "."aprobado";
} else {
    echo $suma." "."desaprobado";
}

?>

