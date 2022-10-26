<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style5.css">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<h1>Total a Pagar</h1>
    <form action="" method="GET">
        <input type="number" name="cantidad" id="cantidad"><br> <br>
        <button type="submit" value="Calcular">Calcular</button>
    </form>
    <?php
        
        if(isset($_GET['cantidad'])) {
            $cantidad = $_GET['cantidad'];
            if($cantidad > 0) {
                $descuento = $cantidad*0.25;
                $total = $cantidad - $descuento;
 
                echo "La cantidad es $cantidad<br>";
                echo "El descuento es $descuento<br>";
                echo "El total es $total<br>". " :3";
 
            } else {
                if($cantidad < 0){
                    echo "Número invalido". "._.";
                }               
            }
        }
        /*Propietario, autor, grupo y especialidad o carrera*/
     echo 'Propietario: ' . get_current_user()."\n". "<br>";
     echo "Nombre del autor: ". "Gilberto Fabian Correa Gonzalez". "<br>";
     echo "Grupo: ". "5PV". "<br>";
     echo "Especialidad: ". "Programación". "<br>";
    ?>
</body>
</html>



 