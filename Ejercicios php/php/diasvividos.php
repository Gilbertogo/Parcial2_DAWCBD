<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días vividos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Días vividos de una persona</h1>
    <form action="" method="get">
       <h2> <label for="edad">Ingresa tu edad</label> </h2>
        <input type="number" name="edad" id="edad" min="0" max="120">
        <input type="submit" name="Continuar">
    </form>
    <?php
$edad = $_GET['edad'];
$dias=$edad*365;
if (isset($_GET['edad'])) {
    echo "<h3 style='text-align:center;'>Tus días vividos son $dias</h3>". "7w7";
}
/*Propietario, autor, grupo y especialidad o carrera*/
echo 'Propietario: ' . get_current_user()."\n". "<br>";
echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
echo "Grupo: ". "5PV". "<br>";
echo "Especialidad: ". "Programación". "<br>";

?>
</body>
</html>
