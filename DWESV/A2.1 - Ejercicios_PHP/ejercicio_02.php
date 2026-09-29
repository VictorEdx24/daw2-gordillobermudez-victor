<?php
    $nombre = "Victor";
    $edad = "23";
    $altura = "1,80";
    $esAlumno = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_02</title>
</head>
<body>
    <h1>Ejercicio_02</h1>
    <ul>
        <li><?=$nombre . " es un " . gettype($nombre)?></li>
        <li><?=$edad . " es un " . gettype($edad)?></li>
        <li><?=var_dump($altura)?></li>
        <li><?=var_dump($esAlumno)?></li>
    </ul>
    
</body>
</html>