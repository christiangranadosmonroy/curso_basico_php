<?php
//insercion de datos dentro de una base de datos.
	
include ("conexion.php");
//comprobabar el envio de los campos para que no esten vacion mediante una condicion
if (isset ($_POST['id'])&& !empty($_POST['id'])
)
{
//linea de conxion al servidor
$conex=mysqli_connect($host,$user,$pw) or die ("error al conectar");
//linea que abre  la base de datos
mysqli_select_db($conex,$bd) or die ("problema al conectar bd");
//pasa los valores de las variables a la tabla
mysqli_query($conex,"DELETE FROM datos_personales WHERE id='$_POST[id]' ");

echo "datos borrados correctamente";
}else{
echo "problemas al borrar los datos";
}
?>
