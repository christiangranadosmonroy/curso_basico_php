<?php
    //Delcaracion de variable a tra ves de una funcion
   function area ($p1,$p2)

{
    //asignacion de los valores de la variable area para despues realizar la operacion
    $adicion = $p1*$p2*$p2;
    $multiplicacion = $adicion * 2;
    return $multiplicacion;

}
//Mensaje que se imprimira
echo area (3.1416,2);

?>