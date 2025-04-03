<?php

/* COMENTARIO
MULTIÍNEA*/

// COMENTARIO DE UNA LÍNEA

# Comentario de una línea

$entero = 1;
$decimal = 1.2;
$string = "<p>El numero // es $entero</p>";
$string2= '<p>El numero es $entero</p>';

$frase = "She said me that \"I'm the best\" ";
// $frase = 'She said me that "I\'m the best" ';

echo $string;
echo($decimal);
ECHO($string);// php es case-insensitive para funciones internaas (como ECHO)
echo($string2); 
echo($frase);

$nombre = "Peter";
$apellido = "Parker";
$nombreCompleto = "<p>".$nombre." ".$apellido."</p>";

print($nombreCompleto) ;

$frutas = ["kiwi", "pera", "mango"];
echo $frutas[0];

$nombreCompleto = ["nombre" => "Mike","apellido" => "Corleone"];
echo $nombreCompleto["apellido"];

$nombre = "Clar";
if ($nombre == "Peter"){
    echo "<p>El nombre es $nombre</p>";
}else if ($apellido == "Parker"){
    echo "<p>El apellido es $apellido</p>";
}else {
    echo "<p>El nombre NO es 'Peter', es $nombre</p>";
}

for ($i = 0;$i < count($frutas); /* Estoy en medio */$i++){
    echo "<p> $frutas[$i]</p>";

}

foreach($nombreCompleto as $clave => $valor){
    echo "<p> La clave es $clave y el valor es $valor</p>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soy el título</h1>
    <?php

        if ($nombre == "Peter"){
            echo "<img src= 'spiderman.webp' alt='Spiderman'> ";
        }
        elseif ($nombre == "Clark") {
            echo "<img src= 'superman.webp' alt='Superman'> ";

        }
        else {
            echo "<img src= 'shin-chan-sqr.webp' alt='Superman'> ";

        }
    ?>

</body>
</html>