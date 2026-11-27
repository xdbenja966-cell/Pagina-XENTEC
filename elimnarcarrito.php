
<?php
// Iniciar sesión para modificar el carrito
session_start();

// Eliminar el producto del carrito usando el índice que viene del formulario
unset($_SESSION['carrito'][$_POST['indice']]);

// Reorganizar los índices del array para que queden correlativos (0,1,2,3...)
$_SESSION['carrito'] = array_values($_SESSION['carrito']);

// Redirigir al carrito para ver los cambios
header("Location: carrito.php");
exit;
?>
