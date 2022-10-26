<?php
 $num1 = $_POST ['numero1'];
 $num2 = $_POST ['numero2'];
 $num3 = $_POST ['numero3'];

 if ($num1>$num2) {
    echo $num1." es mayor que".$num2. "y".$num3;
 }else {
    if ($num1>$num3) {
        echo $num2." es mayor que".$num1. "y".$num3;
    }else{
        echo $num3. " es mayor que".$num2. "y".$num1;
    }
 }

 //otra opción

 /* if ($num1>$num2) {
    if ($num1>$num2) {
        echo $num1. "es mayor que" .$num2. " y ".$num3;
    }else{
        echo $num3. "es mayor que ".$num1."y".$num2;
    }
 }else{
    if($num2>$num3){
        echo $num2. "es mayor que".$num1. "y".$num3;
    }else{
        echo $num3. "es mayor que".$num1. "y".$num2;
    }

 } */


 //operadores de comparacion
  /*
  == igualidad
  > mayor que 
  >= mayor o igual que 
  <= menor o igual que 
  && operador y
  or operador o
  */
 /*  if (condition) { //pregunta
    # codigo que se resuleve si la respuesta a la pregunta es positiva
  }else{ // sino son... 
    # codigo que se resuelve si la respueta a la pregunta es negativa
  } */



/* if ($n1==$n2) {
    echo"ambos valores son iguales"; // imprime si se cumple o no la pregunta
}else{
    if ($n1>$n2) { // se crea otro if que pregunte 
        echo $n1."es mayor que".$n2; //sino se cumple la pregunta que me imprima lo siguiente
    }else{
        echo $n2. "es mayor que".$n1;
    }

} */

?>