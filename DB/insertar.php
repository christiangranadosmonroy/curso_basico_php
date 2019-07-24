<?php
//insercion de datos dentro de una base de datos.
	
include ("conexion.php");
//comprobabar el envio de los campos para que no esten vacion mediante una condicion
if (isset ($_POST['nombre'])&& !empty($_POST['nombre'])
&& isset ($_POST['direccion'])&& !empty($_POST['direccion'])
&& isset ($_POST['telefono'])&& !empty($_POST['telefono'])
&& isset ($_POST['id'])&& !empty($_POST['id'])
)
{
//linea de conxion al servidor
$conex=mysqli_connect($host,$user,$pw) or die ("problemas al conectar");
//linea que abre  la base de datos
mysqli_select_db($conex,$bd) or die ("problema al conectar bd");
//pasa los valores de las variables a la tabla
mysqli_query($conex,"INSERT INTO datos_personales(nombre,direccion,telefono,id)
values ('$_POST[nombre]','$_POST[direccion]','$_POST[telefono]','$_POST[id]')");
echo "datos insertados";
}else
{
echo "problemas al insertar";
}
?>



