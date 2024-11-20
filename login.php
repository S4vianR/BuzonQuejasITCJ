<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Iniciar Sesión</title>
</head>
<body>
<?php
global $mysqli;
// Aquí va el código PHP
// Se incluye el archivo de conexión a la base de datos
include_once "conexion.php";

session_start();

$error = "";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = isset($_POST['username']) ? $_POST['username'] : ""; // Cambiado aquí
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    // Comprobar la conexión
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        // Consulta para verificar si el usuario existe y las credenciales son válidas
        $sqlQuery = "SELECT * FROM CuentasUsuarios WHERE Nom_Usuario = '$nombreUsuario' AND Correo = '$correo' AND Contraseña = '$password'";
        $result = $mysqli->query($sqlQuery);

        if ($result && $result->num_rows > 0) {
            $_SESSION['nombreUsuario'] = $nombreUsuario; // Iniciar sesión solo si las credenciales son válidas
            header("Location: buzon.php");
            exit; // Asegúrate de llamar a exit después de una redirección
        } else {
            $error = "Usuario o contraseña incorrectos";
        }
    }
}
?>

<header>
    <nav>
        <img src="./assets/LogoITCJ.png" alt="Logo ITCJ">
        <button id="acercaButton">Acerca de la página</button>
    </nav>
</header>
<div id="aboutVentanaAcercaPaginaWrapper">
    <div id="aboutVentanaAcercaPagina">
        <div>
            <h2>Acerca de la página</h2>
            <span id="spanButtonClose">&times;</span>
        </div>
        <div>
            <p>Esta página está diseñada para recibir quejas y sugerencias de los usuarios del Instituto
                Tecnológico
                de Cd. Juárez.</p>
            <p>Esperamos mejorar constantemente con tu retroalimentación.</p>
        </div>
    </div>
</div>
<main>
    <section>
        <aside>
            <p>
                BUZÓN DE QUEJAS
            </p>
        </aside>
        <section>
            <h1>Instituto Tecnológico Cd Juárez</h1>
            <form action="login.php" method="post">
                <div class="login">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required placeholder="Nombre de usuario">
                </div>
                <div class="login">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required placeholder="Correo electrónico">
                </div>
                <div class="login">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required placeholder="Contraseña">
                </div>
                <div class="signUp">
                    <p>
                        ¿No tienes una cuenta? ¡Regístrate!
                    </p>
                    <button onclick="window.location.href='/registro.php'">Crear cuenta</button>
                </div>
                <button type="submit">Iniciar Sesión</button>
                <?php
                if (isset($error)) {
                    echo "<p>$error</p>";
                }
                ?>
            </form>
        </section>
    </section>
    <footer>
        <div>
            <p>CAMPUS I</p>
            <p>Av. Tecnológico No. 1340 Fracc. El Crucero C.P. 32500</p>
            <p>Ciudad Juárez, Chih. México</p>
        </div>
        <div>
            <p>Conmutador: (656)688-2500</p>
            <p>Comentarios: webmaster@cdjuarez.tecnm.mx</p>
        </div>
    </footer>
</main>
<script>
    let acercaVentana;
    let acercaButton;
    let spanCloseButton;

    window.addEventListener("load", () => {
        acercaVentana = document.getElementById("aboutVentanaAcercaPaginaWrapper"); // Cambié a 'aboutVentanaAcercaPaginaWrapper'
        acercaVentana.style.display = "none"; // Esto oculta el modal por defecto
        acercaButton = document.getElementById("acercaButton");
        spanCloseButton = document.getElementById("spanButtonClose");

        // Mostrar la ventana de acerca de la página
        acercaButton.addEventListener("click", () => {
            acercaVentana.style.display = "block"; // Muestra el modal
        });

        // Cerrar la ventana al hacer clic en la "x"
        spanCloseButton.addEventListener("click", () => {
            acercaVentana.style.display = "none"; // Oculta el modal
        });

        // Cerrar la ventana al hacer clic fuera de ella
        window.onclick = function (event) {
            if (event.target === acercaVentana) { // Si se hace clic en el fondo
                acercaVentana.style.display = "none"; // Oculta el modal
            }
        };
    });
</script>

</body>
</html>