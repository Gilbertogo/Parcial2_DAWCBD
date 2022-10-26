<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partes_URL</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Encabezado de la pagina -->
    <h1>Partes en las que consta una URL</h1><br>
    <?php
    $url= 'https://www.w3resource.com/php-exercises/php-basic-
    exercises.php';
    $url = parse_url($url);
    echo 'Scheme : '.$url ['scheme']."<br>"; //Se divide en partes la url
    echo 'Host : '.$url ['host']."<br>";
    echo 'Path : '.$url ['path']."<br>"."<br>";
    echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
    echo "Grupo: ". "5PV". "<br>";
    echo "Especialidad: ". "Programación". "<br>";
    ?>
</body>
</html>