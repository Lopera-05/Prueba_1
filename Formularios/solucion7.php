<?php
$nom = $_POST ['nom'];
$mat = $_POST ['mat'];
$cal = $_POST ['cal'];
$nota2 = 7;
$nota3 = 10;

if ($cal<$nota2) {
    echo "Su calificacion final fue REPROBADO";
}else{
    if ($nota2>=$cal) {
        echo "Su calificacion final fue APROBADO";
    }
    elseif ($nota3>=$cal) {
        echo "Su calificacion final fue APROBADO";
    }
}
?>

 

