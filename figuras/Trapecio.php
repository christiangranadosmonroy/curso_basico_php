<?php

   function funcion ($p1,$p2,$p3,$p4)

{
    $adicion = $p1+$p2*$p3/$p4;
    $multiplicacion = $adicion * 2;
    return $multiplicacion;

}

echo funcion (1,2,2,5);

?>