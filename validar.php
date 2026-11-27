<?php
// session_start() activa el sistema de sesiones de PHP.
// Una sesión permite guardar datos del usuario (como su nombre o si está logueado)
// y que esos datos se mantengan mientras navega entre distintas páginas.
// Sin esta línea, $_SESSION no funciona.
session_start();

// --- CONEXIÓN A LA BASE DE DATOS ---
// mysqli_connect() intenta conectarse a MySQL con 4 parámetros:
//   1. "localhost" → el servidor (en XAMPP es tu propia PC)
//   2. "root"     → el usuario de MySQL (por defecto en XAMPP es root)
//   3. ""         → la contraseña (en XAMPP viene vacía)
//   4. "prueba"   → el nombre de la base de datos a la que queremos conectarnos

$conexion = mysqli_connect("localhost", "root", "", "xentec_usuarios");

// Si la conexión falla (!$conexion es verdadero cuando hay error),
// die() muestra el mensaje y detiene el script inmediatamente.
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// --- RECIBIR LOS DATOS DEL FORMULARIO ---
// $_POST es un "array" que PHP llena automáticamente con los datos
// que vienen del formulario HTML enviado con method="POST".
// 'email' y 'password' son los atributos "name" de los <input> del login.
$correo    = $_POST['email'];
$pasword = $_POST['password']; // Esta es la variable correcta

// --- BUSCAR EL USUARIO EN LA BASE DE DATOS ---
// mysqli_prepare() prepara una consulta SQL de forma segura.
// El "?" es un marcador de posición: significa "acá va un valor,
// pero lo vamos a poner después". Esto evita SQL Injection.
// La consulta busca el nombre y la contraseña del usuario cuyo correo coincida.
$stmt = mysqli_prepare($conexion, "SELECT nom_usu, pas_usu FROM crear_usuarios WHERE em_usu = ?");

// mysqli_stmt_bind_param() reemplaza el "?" por el valor real de $email.
// El primer parámetro es el statement, el segundo "s" indica que $email es un string,
// y el tercero es la variable a insertar.
mysqli_stmt_bind_param($stmt, "s", $correo);

// Ejecuta la consulta SQL ya preparada (hace el SELECT en la base de datos).
mysqli_stmt_execute($stmt);

// mysqli_stmt_get_result() guarda el resultado de la consulta.
// Si el correo existe, va a traer los datos de ese usuario;
// si no existe, el resultado estará vacío.
$resultado = mysqli_stmt_get_result($stmt);

// --- VERIFICAR SI EL USUARIO EXISTE ---
// mysqli_fetch_assoc() devuelve una fila del resultado como array asociativo.
// Si no hay filas (el correo no existe), devuelve false y entra al "else".
if ($usuario = mysqli_fetch_assoc($resultado)) {
    
    // Si el correo existe, comparamos la contraseña que escribió el usuario
    // con la que está guardada en la base de datos ($usuario['pas_usu']).
    if ($pasword == $usuario['pas_usu']) {
        
        // ✅ Contraseña correcta → creamos la sesión del usuario.
        // Guardamos en $_SESSION datos que vamos a usar en otras páginas.
        // Estos datos persisten hasta que el usuario cierre sesión.
        $_SESSION['logueado'] = true;       // marca para saber si está logueado
      $_SESSION['nombre']   = $usuario['nom_usu']; // guardamos su nombre
        $_SESSION['email']    = $correo;     // guardamos su correo
        
        // header("Location: ...") redirige al navegador a otra página.
        // En este caso, lo manda a inicio.php (la página principal tras loguearse).

        header("Location: index.php");
        //Se modifica a donde se redirrecciona
        //Una vez que se inicie sesion

        //Vamos a pronombrar Index.html por index.php
        //Para que en nuestra pagina se pueda ejecutar
        //Codigo PHP (Nos va a servir para mostrar el nombre de usuario)
        
        // exit detiene el script para asegurarnos de que no se ejecute
        // nada más después de la redirección.
        exit;
    } else {
        // ❌ La contraseña es incorrecta → mostramos un mensaje con un link para volver.
        echo "❌ Contraseña incorrecta. <a href='login.html'>Volver a intentar</a>";
    }
} else {
    // ❌ El correo no existe en la base de datos.
    echo "❌ El correo no está registrado. <a href='login.html'>Volver</a>";
}

// Cerramos la conexión a la base de datos para liberar recursos.
mysqli_close($conexion);
?>