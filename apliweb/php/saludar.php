<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Salu2</h1>
    <table>
        <!-- Filas(renglones) -->
        <tr>
            <!-- Columnas -->
            <td>Nombre</td> 
            <td><input type="text" name="" id=""/></td>
        </tr>

        <tr>
            <td>Edad</td> 
            <td><input type="number" name="" id=""></td>
        </tr>
        <tr>
            <td>Correo Electrónico </td> 
            <td><input type="email" name="" id=""></td>
        </tr>
        <tr>
            <td>Género</td> 
            <td>
                <select name="" id="">
                    <option value="">Mujer</option>
                    <option value="">Hombre</option>
                    <option value="">Otro</option>
                    <option value="">TanqueSoviético</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button>Saludar</button> 
            </td> 
        </tr>
    </table>
   <script src="./js/saludar.js"></script>
</body>
</html>
<!--<label for="">Nombre:</label>
<input type="text" id="nom">
<button onclick="saludoNombre()">Saludar</button><br><br>
<p>Hola </p>
<script>
    function saludoNombre(){
        document.getElementById("nom");
        
        
    }
</script>-->