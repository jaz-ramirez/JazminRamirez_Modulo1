<?php
    if (isset($_POST["cerrar"]))
    {
        session_start();
        session_unset();
        session_destroy();
        echo "<h1>Gracias por usar nuestro servicio</h1> <h3>Vuelve pronto</h3><br>";
        echo "<a href=\"./form.php\"><button>Volver a iniciar sesión</button></a>"; 
    }
    else
        header ("location: ./form.php ");

?>
