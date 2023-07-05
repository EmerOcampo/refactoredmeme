<?php

include("condb.php");                                                      

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['gmail']))  {
        $nombre = trim($_POST['nombre']);
        $contraseña = trim($_POST['contraseña']);
        $dni = trim("dni");
        $gmail = trim("gmail");
        $consulta = "INSERT INTO usuarios (nombre, contraseña, dni, gmail) VALUES ('$nombre','$contraseña','$dni','$gmail')";
        $resultado = mysqli_query($conex,$consulta);
}
}
?>