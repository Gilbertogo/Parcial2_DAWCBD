<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Encabezado de la pagina -->
    <h1>Tabla para votar</h1><br>
     <!--Tabla para votar-->
     <form action="" method="GET">
     <table border=1 cellspacing=0 cellpadding=0>
        <tr><td><input type="text" name="nombre" id="nombre" placeholder="Escribe aquí tu nombre:"></td>
        <td><input type="number" name="edad" id="edad"></td>
        <td><input type="submit" value="Votar?"></td></tr></table></form><br>
    <?php
    
     echo "<br><br><hr>";
     if(isset($_GET['edad'])) {
        $edad = $_GET['edad'];
        if($edad >= 18) {
            echo '<font color="White">Ya puedes votar uwu</font>'." :3". '<br>' ;
            echo'<img src="../img/bien_mal (2).jpg">';

        } else {
            if($edad < 18){
                echo '<font color="White">No puedes votar josjos</font>'. " ._.". '<br>';
                echo '<img src="../img/bien_mal (3).jpg">';
            }               
        }
    }
     
     echo "<br><br><hr>";
     /*Propietario, autor, grupo y especialidad o carrera*/
     echo 'Propietario: ' . get_current_user()."\n". "<br>";
     echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
     echo "Grupo: ". "5PV". "<br>";
     echo "Especialidad: ". "Programación". "<br>";
    ?>
</body>
</html>