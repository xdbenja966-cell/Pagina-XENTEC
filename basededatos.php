<?php
$nombre = $_POST['nomusu'];
$apellido = $_POST['apeusu'];
$telefono = $_POST['codusu'];
$region = $_POST['regusu'];
$fechadenacimiento = $_POST['nacusu'];
$correo = $_POST['emusu'];
$pasword = $_POST['pasusu'];
$repetircontrasena = $_POST['rpasusu'];


if ($pasword != $repetircontrasena){
    die("Las contraseñas no coinciden");
}


// CONEXIÓN
$hostname = "localhost";
$username = "root";
$password = "";
$basedatosname = "xentec_usuarios";


$conexion = mysqli_connect($hostname, $username, $password, $basedatosname);


if (!$conexion){
    die("Error al conectar: " . mysqli_connect_error());
}


$consulta = "INSERT INTO crear_usuarios
(nom_usu, ape_usu, cod_usu, reg_usu, nac_usu, em_usu, pas_usu, rpas_usu)
VALUES
('$nombre','$apellido','$telefono','$region','$fechadenacimiento','$correo','$pasword','$repetircontrasena')";


if (mysqli_query($conexion, $consulta)){
    header("Location: crearusu.html");
    exit();
}
else{
    echo "Error: " . mysqli_error($conexion);
}


mysqli_close($conexion);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <title>XENTEC</title>
<body>
     <a href="index.php">Volver</a>
</body>
</html>