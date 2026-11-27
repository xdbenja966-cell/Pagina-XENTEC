<?php
// Iniciar sesión para poder guardar datos
session_start();

// Si el carrito no existe, crearlo como un array vacío
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agregar el producto al carrito con los datos del formulario
$_SESSION['carrito'][] = [
    'nombre' => $_POST['nombre'],   // Nombre del producto
    'precio' => $_POST['precio'],   // Precio del producto
    'imagen' => $_POST['imagen']    // Imagen del producto
];

// Redirigir al carrito para ver los productos agregados
header("Location: carrito.php");
exit;
?>