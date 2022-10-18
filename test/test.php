<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi :3</title>
</head>
<body>
    <?php
      echo "<h1 style='color:darkcyan;'>Ya soy más Cool 7w7</h1>";
      print("<h3>Bienvenidos a PhP  :)</h3>");
      $nombre='Keanu Reeves';
      $carrera='Programación';
      $grupo='5PV';
      
    ?>
    <ul>
        <li><?= $nombre;?></li> <!--se puede poner todo de nuevo:-->
        <li><?php echo $carrera;?></li> 
        <li><?= $grupo;?></li>
    </ul>
    <select name="" id="">
        <option value=""><?= $nombre;?></option>
        <option value=""><?= $carrera;?></option>
        <option value=""><?php echo $grupo ;?></option>
    </select>
    <input type="text" name="" id="" value="<?= $nombre;?>">
    <input type="text" name="" id="" value="<?php echo $carrera;?>">
    <input type="text" name="" id="" value="<?= $grupo;?>">


</body>
</html>