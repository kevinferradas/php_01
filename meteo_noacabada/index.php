<?php



if ($_GET) {

$RUTA_ICONOS = "https://www.imelcf.gob.pa/wp-content/plugins/location-weather/assets/images/icons/weather-icons";
$city = $_GET['ciudad'];
$units = "metric";
$lang = $_GET['idioma'];
$rango = $_GET['rango'];
$appid = "1478ad26c8d8533a468a8f1b34d91a65";


$city2 = str_replace(" ", "%20", $city);
// Mayúsculas (convención) para constantes
$URL = "https://api.openweathermap.org/data/2.5/forecast?q=$city2&units=$units&lang=$lang&appid=$appid";

// echo $URL;


$stringMeteo = file_get_contents($URL);

$jsonMeteo = json_decode($stringMeteo, true);


// echo ($URL);


if ($rango == "1"){
    $nombre_icono = $jsonMeteo['list'][1]["weather"][0]['icon']; 

    $mensajeClima = "<div>
        <div>
        <div id='sensacionTermica'>
        <p><span id='parametros'> Sensación térmica </span>:".$jsonMeteo['list'][0]['main']['feels_like'] ."ºC</p>
        </div>
        </div>
        <div id = 'otrosParametros'>
        <p> <span id='parametros'> Ciudad </span>:" .$jsonMeteo["city"]["name"]."</p>
        <p><span id='parametros'> Temperatura actual:</span>:". $jsonMeteo["list"][0]['main']['temp']. "ºC</p>
        <p><span id='parametros'> Máx. / Mín. </span>:". $jsonMeteo["list"][0]['main']["temp_max"]."º /". $jsonMeteo["list"][0]['main']['temp_min']."º</p>
        <p><span id='parametros'> Humedad </span>:" .$jsonMeteo["list"][0]['main']["humidity"] ."%</p>
        <p><span id='parametros'> Nubosidad </span>:" .$jsonMeteo["list"][0]['clouds']["all"] ."%</p>
        <p><span id='parametros'> Visibilidad </span>:" .$jsonMeteo["list"][0]['visibility'] ."km</p>
        <p><span id='parametros'> Viento </span>:". $jsonMeteo["list"][0]['wind']["speed"] ."m/s</p>
        <p><span id='parametros'> Precipitación </span>:". $jsonMeteo["list"][0]['pop'] ."% </p>
        <p><span id='parametros'> Descripción </span> :". $jsonMeteo['list'][0]["weather"][0]['description']."</p>
        <div><img src= ".$RUTA_ICONOS."/".$nombre_icono."svg></div>
        </div>
        </div>";
    
    echo ($mensajeClima);
}
}



// echo $jsonMeteo['weather'][0]['description'];
// echo "<br><br>";

 
// echo "<img src= '$RUTA_ICONOS/$nombre_icono.svg ' alt = 'Icono del tiempo'>";

// echo "<br><br>";

// // Timezone local
// $offset = date('Z');

// $sunrise = (int)date($jsonMeteo['sys']['sunrise']);
// // var_dump ($sunrise); Nos dirá que es un string
// $sunset= (int)date($jsonMeteo['sys']['sunset']);
// $timezone = (int)$jsonMeteo['timezone'];

// $sunriselocal = $sunrise + $timezone -$offset;
// $sunsetlocal = $sunset + $timezone-$offset ;

//     echo "<img src ='sunrise.svg' alt= 'Salida del sol' width ='100px' >" . date("Y-m-d H-i-s",$sunriselocal);
//     echo "<br><br>";
//     echo date("Y-m-d H-i-s",$sunsetlocal);
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Meteo</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer type="module" src="js/app.js"></script>
</head>
<body>
    <header>
        <div class ="encabezado">
            <h1>MeteoApp</h1>
        </div>   
    </header>
    <main>
        <section>
            <form action="#" name="formClima" class="formClima" method="GET">
                <p>Introducir ciudad y escoger idioma </p>
                <div class = "divClima">
                    <input type="text" 
                    name="ciudad" 
                    id="ciudad"
                    placeholder="Ingrese la ciudad">
                    <select name="idioma" >
                        <option value="es" selected>Castellano </option>
                        <option value="ca" >Catalán</option>
                        <option value="en" >Inglés</option>
                    </select>
                <input type="submit" value="Ver clima ">
                </div>
                <div class = "rango">
                    <label for="range">Seleccione una opción :</label>
                    <input type="range" 
                    name="rango" 
                    id="rangoOpcion" 
                    min="1" 
                    max="3"
                    value = "1">
                    <span id="opcion">Ahora</span>
                </div>
            </form>

            <!-- El usuario elige el día en el que está interesado -->
            <section id = "sectionClimaDia">
                <form action="#" name="climaPordias">
                    <div id="divDias"></div>
                </form>
            </section>   
        </section>
       
        <!-- <label for="range">range</label>
        <input type="range" name="range" id="range" min="1" max="5"> -->
        <section>
            <div id="divDatos"></div>
        </section>
    </main>
    
<span></span>
    

</body>
</html>






