<?php

//Practica 2
$estructura = array ("nombre"=>"Christian" ,"apellido1"=>"Granados","apellido2"=>"Monroy");
echo $estructura ["nombre"];
echo "<br>";
echo "<br>";


//operaciones
echo " Operaciones Basicas";
echo"<br>";
$adicion = 4 + 4; // el valor es 4
$multiplicacion = $adicion * 3;

echo $adicion;

echo "<br>";

echo $multiplicacion;

//asignacion
echo "<br>";
echo "<br>";
$valor1 = "hola";
$valor2 = 20;

echo $valor1;
echo "<br>";
echo $valor2;
echo "<br>";
echo "<br>";
//comparacion


echo (6 >= 4);
echo "<br>";
echo (5 == 11);

echo "<br>";
echo "<br>";
//incremento

$variable = 5;

echo $variable++;
echo "<br>";
echo $variable;

//operadores logicos
echo "<br>";
echo "<br>";
echo ((2 == 2) &&(2 !=1));
echo "<br>";
echo "<br>";
echo ((3 == 3)or(4 !=4));

//sentencias de control condicional if-else

//if else

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$edad=21;

if ($edad >= 18) {
echo "ya estas grade";
} else {
echo "eres muy joven";
}

//switche case

switch ($i) {
  case 0:
      echo "i es igual a 0";
      break;
  case 1:
      echo "i es igual a 1";
      break;
  case 2:
      echo "i es igual a 2";
      break;
}

//FOR

for($i = 1; $i <=10; $i++) {
echo "edad";
}

//bucles

echo "<br>";

$i = 1;

while ($i <=10) {
     
  echo $i++;
}
?>