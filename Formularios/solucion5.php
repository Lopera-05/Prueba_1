<?php
$hermano1 = $_POST ['h1'];
$hermano2 = $_POST ['h2'];

if ($hermano1 >= $hermano2) {
    
    $resta_hermanos = $hermano1 - $hermano2;
    echo "La diferencia de edad entre los dos hermanos es: ".$resta_hermanos;
    echo "<br>";
    echo "Y la edad del hermano mayor es: ".$hermano1;


} else if ($hermano1 < $hermano2) {
    $resta_hermanos = $hermano2 - $hermano1;
    echo "La diferencia de edad entre los dos hermanos es: ".$resta_hermanos;
    echo "<br>";
    echo "Y la edad del hermano mayor es: ".$hermano2;
}


?>
