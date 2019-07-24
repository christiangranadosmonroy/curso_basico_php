<?php
include("conexion.php");
function mostrarDatos ($resultados){
    if($resultados !=NULL)
    {
       echo "NOMBRE: ".$resultados['Nombre'],"<br/>";
       echo "DIRECCION: ".$resultados['Direccion']."<br/>";
       echo "TELEFONO".$resultados['Telefono']."<br/>";
       echo "ID: ".$resultados['id']."<br/>";
       echo "*************************************** <br/>";
    }else{
        echo "<br/> No se encontraron mas datos <br/>";}
    }
    if (isset($_POST['id'])&& !empty($_POST['id']))
    {
        $conex= mysqli_connect("$host","$user",$pw)or die("problemas al conectar");
        mysqli_select_db($conex, "$bd");
    
        $result =mysqli_query($conex, "SELECT * FROM datos_personales Where id='$_POST[id]'");
        while ($fila = mysqli_fetch_array($result))
        {
            mostrarDatos($fila);
        }
        mysqli_free_result($result);mysqli_close($conex);
    }else{
        echo "Debe especificar un ID.\n";
    }
?>