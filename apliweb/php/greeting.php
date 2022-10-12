<?php
$nombre=$_POST['name'];
$edad=$_POST['edad'];
$telefono=$_POST['tele'];
echo "<h1>Hola $nombre</h1>";
echo "<br>";
echo "Salu2 $nombre";
echo "<hr>";
echo "Tu edad es: $edad";
echo "<hr>";
echo "Tu telefono es: $telefono";
echo "<hr>";
echo "<a href='../html/greetingForm.html'>Regresar</a>";
?>