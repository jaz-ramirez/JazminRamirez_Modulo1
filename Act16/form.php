<?php
    session_start();
    //si ya hay sesión para no volver a contestar el formulario
    if(isset ($_SESSION["name"])){
        header("location: ./index.php");
    }
else {
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<!--FORMULARIO-->
    <form action="./index.php" method="POST">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <label for="name">Nombre: 
                <input type="text" name="name" required>
            </label><br><br>
            <label for="Apellido"> Apellido:
                <input type="text" name="apellido" required>
            </label><br><br>
            <label for="group">Grupo: 
                <input type="text" name="group" required>
            </label><br><br>
            <label for="date"> Fecha: 
                <input type="date" name="date" required>
            </label><br><br>
            <label for="correo"> Correo electrónico:
                <input type="email" name="correo" required>
            </label><br><br>
            <label for="contraseña"> Contraseña: 
                <input type="password" name="contraseña" required>
            </label><br><br>

            <input type="hidden" id="sesion" name="sesion" value="sesiona">
            <label for="Ingresar">  
                <input type="submit" value="Ingresar">
            </label>

        </fielset>
    </form>
    
</body>
</html>';
}
    
?>

    
