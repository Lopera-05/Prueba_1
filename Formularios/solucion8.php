<?php
$sexo= $_POST ['sexo'];
$edad = $_POST ['edad'];

if($sexo=="hombre" or $sexo=="m"){
    if($edad>=63){
        echo "Se puede jubilar";
    }else{
        echo "No se puede jubilar";
    }
}elseif($sexo=="mujer" or $sexo=="f"){
    if($edad>=54){
        echo "Se puede jubilar";
    }else{
        echo "No se puede jubilar";
    }
}
?>