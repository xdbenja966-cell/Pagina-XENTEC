<?php
session_start();
//Si no llega logueado, lo mandamos
//a login
if (!isset ($_SESSION['logueado']) || $_SESSION['logueado'] !== true){
    header("Location: iniciarsesion.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio </title>
    </head>
<body>
    <h2>Hola! <?=htmlspecialchars($_SESSION['nombre'])?></h2>
    <p>Bienvenida a tu carrito de compras</p>
    <a href="carrito.php">Ver productos</a>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>