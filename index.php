<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Buzón de Quejas</title>
</head>
<body>
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
            <div class="buttons">
                <!-- Botón de inicio de sesión -->
                <button onclick="window.location.href='/login.php'">Iniciar Sesión</button>
                <!-- Botón de registro -->
                <button onclick="window.location.href='/registro.php'">Registrarse</button>
            </div>

            <img src="assets/LogoITCJ_2.png" alt="Mascota ITCJ">
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
