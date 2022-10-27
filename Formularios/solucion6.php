<?php
$n_volantes = $_POST ['n_volantes'];
$v_volantes = 2000;
$n_posters = $_POST ['n_posters'];
$v_posters = 5000;
$n_tarjetas = $_POST ['n_tarjetas'];
$v_tarjetas = 500;
$v_t_volantes = $n_volantes * $v_volantes;
$v_t_posters = $n_posters * $v_posters;
$v_t_tarjetas = $n_tarjetas * $v_tarjetas;
$valor_t = $v_t_volantes + $v_t_posters + $v_t_tarjetas;

echo "El valor total de volantes es: ".$v_t_volantes;
echo "<br>";
echo "El valor total de posters es: ".$v_t_posters;
echo "<br>";
echo "El valor total de tarjetas es: ".$v_t_posters;
echo "<br>";
echo "<br>";
echo "El valor total es: ".$valor_t;

?>