<?php
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XENTEC</title>
    <link rel="stylesheet" href="productos.css">
    <link rel="shortcut icon" href="img/header/logo.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- HEADER (menú y logo) -->
    <header>

        <div class="menu">
            <!-- Logo -->
            <a href="index.php" class="btn-img">
                <img class="img-menu" src="img/header/logo.jpg" alt="logo">
            </a>

            <!-- Botones con texto -->
            <a href="productos.html" class="btn-nav">Productos</a>
            <a href="ofertas.html" class="btn-nav">Ofertas</a>
            <a href="cupones.html" class="btn-nav">Cupones</a>

            <!-- Carrito -->
            <a href="carrito.php" class="btn-img">
                <img src="img/header/carrito-de-compras.png" alt="Carrito" width="55" height="55">
            </a>

            <!-- Menú desplegable -->
            <details class="menu-desplegable">
                <summary>
                    <img src="img/header/menu.png" alt="menu" width="65" height="65">
                </summary>
                <div class="desplegable-contenido">
                    <a href="soportetecnico.html">Soporte Técnico</a>

                    <!-- TU CÓDIGO ORIGINAL INTACTO -->
                    <?php if($nombre_usuario != ""): ?>
                    <a href="logout.php">Cerrar sesión</a>
                    <?php else: ?>
                    <form action="iniciarsesion.html" method="get">
                        <button class="btn-login-menu">Iniciar sesión</button>
                    </form>
                    <?php endif; ?>
                </div>
            </details>

            <?php if($nombre_usuario != ""): ?>
            <div class="bienvenida-esquina">
                👋 Bienvenido,
                <?php echo $nombre_usuario; ?>
            </div>
            <?php endif; ?>

        </div>
    </header>

    </div> <!-- Este es el cierre de tu div class="menu" -->
    </header>
    <!-- CONTENIDO PRINCIPAL -->
    <main>
        <div class="h1">
            <marquee>
                <h1>Productos más vendidos</h1>
            </marquee>
        </div>

        <div class="contenedor">

            <!-- PARLANTE -->
            <div class="cupon">
                <h2>Parlante</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/parlantes.webp">
                </div>
                <h2 class="precio">$49.999</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Parlante">
                        <input type="hidden" name="precio" value="49999">
                        <input type="hidden" name="imagen" value="img/base/parlantes.webp">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Parlante">
                        <input type="hidden" name="precio" value="49999">
                        <input type="hidden" name="imagen" value="img/base/parlantes.webp">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- GRAFICA RTX -->
            <div class="cupon">
                <h2>Grafica RTX</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/rtx.png">
                </div>
                <h2 class="precio">$959.999</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Grafica RTX">
                        <input type="hidden" name="precio" value="959999">
                        <input type="hidden" name="imagen" value="img/base/rtx.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Grafica RTX">
                        <input type="hidden" name="precio" value="959999">
                        <input type="hidden" name="imagen" value="img/base/rtx.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- MEMORIA RAM -->
            <div class="cupon">
                <h2>Memoria RAM</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/ram.png">
                </div>
                <h2 class="precio">$650.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Memoria RAM">
                        <input type="hidden" name="precio" value="650000">
                        <input type="hidden" name="imagen" value="img/base/ram.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Memoria RAM">
                        <input type="hidden" name="precio" value="650000">
                        <input type="hidden" name="imagen" value="img/base/ram.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- PROCESADOR -->
            <div class="cupon">
                <h2>Procesador</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/procesador.jpg">
                </div>
                <h2 class="precio">$380.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Procesador">
                        <input type="hidden" name="precio" value="380000">
                        <input type="hidden" name="imagen" value="img/base/procesador.jpg">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Procesador">
                        <input type="hidden" name="precio" value="380000">
                        <input type="hidden" name="imagen" value="img/base/procesador.jpg">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- PLACA MADRE -->
            <div class="cupon">
                <h2>Placa Madre</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/placam.png">
                </div>
                <h2 class="precio">$80.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Placa Madre">
                        <input type="hidden" name="precio" value="80000">
                        <input type="hidden" name="imagen" value="img/base/placam.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Placa Madre">
                        <input type="hidden" name="precio" value="80000">
                        <input type="hidden" name="imagen" value="img/base/placam.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- ADAPTADOR -->
            <div class="cupon">
                <h2>Adaptador</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/adaptador sata.png">
                </div>
                <h2 class="precio">$40.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Adaptador">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/adaptador sata.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Adaptador">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/adaptadorsata.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- CABLE SATA -->
            <div class="cupon">
                <h2>Cable Sata</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/cable sata.png">
                </div>
                <h2 class="precio">$10.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Cable Sata">
                        <input type="hidden" name="precio" value="10000">
                        <input type="hidden" name="imagen" value="img/base/cable sata">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Cable Sata">
                        <input type="hidden" name="precio" value="10000">
                        <input type="hidden" name="imagen" value="img/base/cable sata.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- DISCO DURO -->
            <div class="cupon">
                <h2>Disco Duro</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/disco duro.png">
                </div>
                <h2 class="precio">$40.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Disco Duro">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/disco duro.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Disco Duro">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/disco duro.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- TECLADO -->
            <div class="cupon">
                <h2>Teclado</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/teclado inalambrico.png">
                </div>
                <h2 class="precio">$40.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Teclado">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/tecladoi nalambrico.png">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Teclado">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/teclado inalambrico.png">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

            <!-- PENDRIVE -->
            <div class="cupon">
                <h2>Pendrive</h2>
                <div class="imagenes">
                    <img class="monitor" src="img/base/pendrive.jpg">
                </div>
                <h2 class="precio">$40.000</h2>
                <div class="botones">
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Pendrive">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/pendrive.jpg">
                        <button type="submit" class="comprar">Comprar</button>
                    </form>
                    <form action="agregarcarrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nombre" value="Pendrive">
                        <input type="hidden" name="precio" value="40000">
                        <input type="hidden" name="imagen" value="img/base/pendrive.jpg">
                        <button type="submit" class="carrito">
                            <img src="img/header/carrito.png" alt="Carrito">
                        </button>
                    </form>
                </div>
            </div>

        </div>
                <a href="#" class="btn-volver-arriba">▲</a>

    </main>

    <!-- FOOTER -->
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