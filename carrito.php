<?php
// Iniciar sesión para leer el carrito guardado
session_start();

// Obtener el carrito de la sesión, si no existe usar un array vacío
$carrito = $_SESSION['carrito'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrito.css">
    <link rel="shortcut icon" href="img/header/logo.jpg" type="image/x-icon">
    <title>Carrito - XENTEC</title>
</head>
<body>

<header>
    <div class="menu">
        <a href="index.php" class="btn-img">
           <img class="img-menu" src="img/header/logo.jpg" alt="logo">
        </a>
        <a href="productos.html" class="btn-nav">Productos</a>
        <a href="ofertas.html" class="btn-nav">Ofertas</a>
        <a href="cupones.html" class="btn-nav">Cupones</a>
        <a href="carrito.php" class="btn-img">
            <img src="img/header/carrito-de-compras.png" alt="Carrito" width="55" height="55">
        </a>
        <details class="menu-desplegable">
            <summary>
                <img src="img/header/menu.png" alt="Menú" width="65" height="65">
            </summary>
            <div class="desplegable-contenido">
                <a href="soportetecnico.html">Soporte Técnico</a>
                <form action="iniciarsesion.html" method="get" style="width:100%;">
                    <button type="submit" class="btn-login-menu">Iniciar Sesión</button>
                </form>
            </div>
        </details>
    </div>
</header>

<main class="carrito-main">
    <h1 class="titulo-carrito">🛒 Tu Carrito</h1>

    <?php if (empty($carrito)): ?>
        <div class="carrito-vacio">
            <p>Tu carrito está vacío 😢</p>
            <a href="index.php" class="btn-seguir">Ver productos</a>
        </div>
    <?php else: ?>

        <div class="lista-carrito">
            <?php foreach ($carrito as $index => $producto): ?>
                <div class="item-carrito">
                    <img class="item-img" src="<?= htmlspecialchars($producto['imagen']) ?>" alt="<?= htmlspecialchars($producto['nombre']) ?>">
                    <div class="item-info">
                        <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
                        <p class="item-precio">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                    </div>
                    <form action="eliminarcarrito.php" method="POST" class="form-eliminar">
                        <input type="hidden" name="indice" value="<?= $index ?>">
                        <button type="submit" class="btn-eliminar">🗑 Eliminar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="total-carrito">
            <span>Total:</span>
            <strong>$<?= number_format(array_sum(array_column($carrito, 'precio')), 0, ',', '.') ?></strong>
        </div>

        <div class="acciones-carrito">
            <a href="index.php" class="btn-seguir">← Seguir comprando</a>
            <button class="btn-finalizar">Finalizar compra</button>
        </div>

    <?php endif; ?>
</main>

 <footer>
        <div id="footer">
            <div class="item">
                <img src="img/redes/gmail.png" width="25" height="25">
                <span>Contactanos: XENTEC@gmail.com</span>
            </div>
            <div class="item">
                <img src="img/redes/instagram.png" width="25" height="25">
                <span>XENTEC_Oficial</span>
            </div>
            <div class="item">
                <img src="img/redes/Twitter.png" width="25" height="25">
                <span>XENTEC</span>
            </div>
            <div class="item">
                <img src="img/redes/facebook.png" width="25" height="25">
                <span>XENTEC_Oficial</span>
            </div>
            <div class="item">
                <img src="img/redes/whatsapp.png" width="25" height="25">
                <span>+54 9 11 4609-3377</span>
            </div>
            <div class="item">
                <img src="img/redes/marcador-de-posicion.png" width="25" height="25">
                <span>Avenida Santa Fe 2100, Recoleta, CABA</span>
            </div>
        </div>
    </footer>
</body>
</html>