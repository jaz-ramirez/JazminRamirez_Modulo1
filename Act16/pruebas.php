<?php

$correo = (isset($_POST["correo"])&& $_POST["correo"] !="") ?$_POST["correo"]: 0;

echo $correo;
?>