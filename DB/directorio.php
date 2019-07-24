<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directorio</title>
</head>
<body>
    
    <form action = "insertar.php" method="post" name="frm">
            <br>
        <input type= "text" name = "nombre" placeholder = "NOMBRE">
            <br>
        <input type= "text" name = "direccion" placeholder = "DIRECCION">
            <br>
        <input type= "text" name = "telefono" placeholder = "TELEFONO">
            <br>
        <input type= "text" name = "id" placeholder = "id">
            <br>
        <input type= "submit" value = "Enviar"/>
    </form>

    <hr>
    <label>Delete</label>
    <form action="delete.php" method="post">
        <input type="text" name ="id" placeholder="Inserta el id">
        <input type="submit" value= "delete">
    </form>
    
    <hr>
    <label>Query</label>
    <form action="query.php" method="post">
        <input type="text" name ="id" placeholder="Ingresa el ID">
        <input type="submit" value= "Consultar">
    </form>
</body>
</html>