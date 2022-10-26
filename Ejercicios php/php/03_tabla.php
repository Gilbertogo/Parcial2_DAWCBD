<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla1(E3)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Encabezado de la pagina -->
    <h1>Creando una tabla con Php</h1><br>
    <?php
     $materia1= 'Construye Bases de Datos';
     $materia2= 'Desarrolla Aplicaciones Web';
     $calmateria1_p1 = 10;
     $calmateria2_p1 = 9;
     $calmateria1_p2 = 10;
     $calmateria2_p2 = 10;
     //Tabla 1
     echo "<table border=1 cellspacing=0 cellpadding=0>
        <tr><td><font color=blue>$materia1</td></font><td>$calmateria1_p1</td></tr>
        <tr><td><font color=blue>$materia2</td></font><td>$calmateria2_p1</td></tr></table>";
     echo "<br><br><hr>";
     echo "<h1>Datos desplegados en una tabla</h1><br>";
     //Tabla2(Propia)
     echo "<center><table border=1 cellspacing=0 cellpadding=0>
     <tr><td><font color=white>Nombre</td></font><td><font color= cyan>Parcial 1</td></font>
     <td><font color= cyan>Parcial 2</td></font><td><font color= cyan>Parcial 3</td></font>
     <td><font color= cyan>Final</td></tr></font>
     <tr><td><font color=white>M</font></td><td><font color=white>$calmateria1_p2</td></font>
     <td><font color=white>$calmateria2_p2</td></font><td><font color=white>10</td></font>
     <td><font color=white>10</td></font> </tr>
     </table></center>";
     echo "<br><br><hr>";
     /*Propietario, autor, grupo y especialidad o carrera*/
     echo 'Propietario: ' . get_current_user()."\n". "<br>";
     echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
     echo "Grupo: ". "5PV". "<br>";
     echo "Especialidad: ". "Programación". "<br>";
    ?>
    
    
</body>
</html>