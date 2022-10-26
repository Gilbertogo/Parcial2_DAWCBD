<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Encabezado de la pagina -->
    <h1>Redireccionar a una pagina</h1><br>
    <!-- botones para redireccionar con php -->
    <button><?php echo '<a href="https://es-la.facebook.com/">Face</a>';//php para redireccionar a facebook?></button><br>
    <button><?php echo '<a href="https://www.youtube.com/">Yutu</a>';//php para redireccionar a Youtube?></button> <br>
    <button><?php echo '<a href="https://twitter.com/login?lang=es">Twita</a>'//php para redireccionar a Twitter;?></button><br><br>
    <?php
    /*Propietario, autor, grupo y especialidad o carrera*/
    echo 'Propietario: ' . get_current_user()."\n". "<br>";
    echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
    echo "Grupo: ". "5PV". "<br>";
    echo "Especialidad: ". "Programación". "<br>";
    ?>
    
    
</body>
</html>