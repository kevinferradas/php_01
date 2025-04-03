

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteo</title>
</head>
<body>
    <!-- GET o get -->
    <!-- <form action="datosFormulario.php" method ="GET"> -->
    <form action="datosFormulario.php" method ="POST"> 
        <div>
            <label>Nombre :<input type="text" name="name" id="nombre"></label>
        </div>
        <br>
        <div>
            <label>Apellido :<input type="text" name="surname" id="apellido"></label>
        </div>
            <button type="submit">Enviar</button>
        
    </form>
</body>
</html>