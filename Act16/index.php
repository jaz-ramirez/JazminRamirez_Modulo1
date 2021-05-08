<?php
//Verificar los elementos introducidos por el ususario
  $sesion = (isset($_POST ["sesion"])&& $_POST["sesion"] !="") ?$_POST["sesio"]: 0;
  $name = (isset($_POST ["name"])&& $_POST["name"] !="") ?$_POST["name"]: 0;
  $apellido = (isset($_POST ["apellido"])&& $_POST["apellido"] !="") ?$_POST["apellido"]: 0;
  $group = (isset($_POST ["group"])&& $_POST["group"] !="") ?$_POST["group"]: 0;
  $date = (isset($_POST ["date"])&& $_POST["date"] !="") ?$_POST["date"]: 0;
  $correo = (isset($_POST["correo"])&& $_POST["correo"] !="") ?$_POST["correo"]: 0;
  $password = (isset($_POST ["contraseña"])&& $_POST["contraseña"] !="") ?$_POST["contraseña"]: 0;
  //inicia sesión
  session_start();
  //
  if (isset($_SESSION["name"]))
  {
   
    $s_name = (isset($_SESSION ["name"])&& $_SESSION["name"] !="") ?$_SESSION["name"]: 0;
    $s_apellido = (isset($_SESSION ["apellido"])&& $_SESSION["apellido"] !="") ?$_SESSION["apellido"]: 0;
    $s_group = (isset($_SESSION ["group"])&& $_SESSION["group"] !="") ?$_SESSION["group"]: 0;
    $s_date = (isset($_SESSION ["date"])&& $_SESSION["date"] !="") ?$_SESSION["date"]: 0;
    $s_correo = (isset($_SESSION ["correo"])&& $_SESSION["correo"] !="") ?$_SESSION["correo"]: 0;
    $s_password = (isset($_SESSION ["contraseña"])&& $_SESSION["contraseña"] !="") ?$_SESSION["contraseña"]: 0;
    
    echo "<table border=\"1\">";
      echo"<thead>";
        echo"<th colspan=\"2\">Información de inicio de sesión</th>";
      echo "</thead>";
      echo "<tbody>";
        echo "<tr>";
              echo"<td>Nombre completo: </td>";
              echo"<td>$s_name $s_apellido</td>";
        echo "</tr>";
              echo"<td>Grupo: </td>";
              echo"<td>$s_group</td>";
        echo "<tr>";
              echo"<td>Fecha de nacimiento: </td>";
              echo"<td>$s_date</td>";
        echo "</tr>";
              echo"<td>Correo electrónico: </td>";
              echo"<td>$s_correo</td>";
      echo"</tbody>";
    echo "</table><br><br>";
    echo "<form action=\"./cerrar.php\" method=\"POST\">";
      echo "<input type=\"hidden\" id=\"cerrar\" name=\"cerrar\" value=\"Sesionbye\">";
      echo "<button type=\"submit\">Cerrar Sesión</button>";
    echo "</form>";
     
  }
  else if(isset($_POST["sesion"]))
  {

    $_SESSION ["sesion"] = $sesion;
    $_SESSION ["apellido"] = $apellido;
    $_SESSION ["name"] = $name;
    $_SESSION ["group"] = $group;
    $_SESSION ["date"] =$date;
    $_SESSION ["correo"] = $correo;
    $_SESSION ["contraseña"]=$password;
    header ("location: ./index.php ");
    


  }
  else{
    echo "error";
    header ("location: ./form.php ");
  }
    
?>