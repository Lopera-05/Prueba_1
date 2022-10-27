<?php
$nom = $_POST ['nom'];
$mat = $_POST ['mat'];
$nt1 = $_POST ['nt1'];
$nt2 = $_POST ['nt2'];
$nt3 = $_POST ['nt3'];
$divi = 3;
$suma = ($nt1 + $nt2 + $nt3) / $divi;

echo "El promedio de"." ".$nom." en "." ".$mat." es "." ".$suma; 
?>
