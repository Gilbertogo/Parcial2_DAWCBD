<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tabla</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <h1>Generando una tabla con php</h1>
    <form action="" method="get">
     <label for="columnas">Columna</label> 
     <input type="number" name="col" id="col" >
     <label for="filas">Filas</label>
     <input type="number" name="fil" id="fil">
     <input type="submit" value="Generar">
    </form>
    <br><br><hr>
 <?php


    if (isset($_GET['fil']) && isset($_GET['col'])) {
     echo '<table border=4 cellspacing=2 style="
     border-color:firebrick; border-style:double;" align="center">';

     for($ren=1; $ren<=$_GET['fil']; $ren++){
        echo "<tr>";//Se genera un nuevo renglon
        for ($col=1; $col<=$_GET['col'] ; $col++) { 
           echo "<td>";#Se crea una columna
           echo "$ren$col";
           echo "</td>"; #Se cierra la columna
        }
        echo "</tr>";//Se cierra el renglon
    }
    echo "</table>"; //Se cierra la tabla
   }
echo "<br>". "<br>". "<hr>";
/*Propietario, autor, grupo y especialidad o carrera*/
echo 'Propietario: ' . get_current_user()."\n". "<br>";
echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
echo "Grupo: ". "5PV". "<br>";
echo "Especialidad: ". "Programación". "<br>";

 ?>
</body>
</html>
