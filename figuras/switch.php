<?php
$figura = $_POST ["figura"];
echo "seleccionaste la opcion".$figura."<br>";

$i= $figura;

switch ($i){
case 1 :

    function area ($p1,$p2)

  {
      $adicion = $p1*$p2*$p2;
      $multiplicacion = $adicion * 2;
      return $multiplicacion;
  
  }
  echo area (3.1416,2);

break;

case 2:

    function funcion ($p1,$p2,$p3)

    {
        $adicion = $p1*$p2 / $p3;
        $multiplicacion = $adicion * 2;
        return $multiplicacion;
    
    }
    
    echo funcion (9,5,2);

break;

case 3:

  
function funcion ($p1,$p2,$p3,$p4)

{
    $adicion = $p1+$p2*$p3/$p4;
    $multiplicacion = $adicion * 2;
    return $multiplicacion;

}

echo funcion (1,2,2,5);

}
?>