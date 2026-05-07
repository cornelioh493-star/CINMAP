<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $pelicula = $_POST['titulo_pelicula'];

    echo "Se ha recibido la información de la película: " . $pelicula;
    
   
}
$nombreProyecto = "Cinmap";
$estadoServidor = "Local (Intranet)";
$version = "1.0.2";
$fechaActual = date("d/m/Y"); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nombreProyecto; ?> - Inicio</title>
    <style>
        body { font-family: sans-serif; background: #000000; padding: 40px; }
        .card { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }
        .status { color: #28a745; font-weight: bold; font-size: 0.9em; }
        h1 { color: #1a1a1a; margin-top: 0; }
        hr { border: 0; border-top: 1px solid #eee; margin: 20px 0; }
    </style>
</head>
<body>

<div class="card">
    <h1>Proyecto: <?php echo $nombreProyecto; ?></h1>
    <p class="status">● Estado del Sistema: <?php echo $estadoServidor; ?></p>
    <p>Fecha de acceso: <?php echo $fechaActual; ?></p>
    
    <hr>
    
    <h3>Descripción</h3>
    <p>Este sistema está diseñado para la administración interna de una sucursal cinematográfica, permitiendo el control de boletaje y dulcería sin dependencia de internet.</p>

    <div style="background: #fff3cd; padding: 10px; border-radius: 5px; font-size: 0.85em;">
        <strong>Nota de seguridad:</strong> La base de datos SQL se encuentra alojada localmente para garantizar la integridad de la información.
    </div>
</div>

</body>
</html>