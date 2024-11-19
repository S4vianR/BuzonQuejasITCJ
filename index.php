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
        <img src="./assets/EscudoCdJuarez Tecnologico.jpg" alt="Logo ITCJ">
        <button id="acercaButton">Acerca de la página</button>
    </nav>
</header>
<main>
    <section>
        <h1>Instituto Tecnológico Cd Juárez</h1>
        <div class="buttons">
            <!-- Botón de inicio de sesión -->
            <button onclick="window.location.href='InicioSesion.html'">Iniciar Sesión</button>
            <!-- Botón de registro -->
            <button onclick="window.location.href='Registro.html'">Registrarse</button>
        </div>

        <img src="assets/LogoITCJ.png" alt="Mascota ITCJ">
    </section>
    <section>
        <div id="aboutVentanaAcercaPagina">
            <div>
                <span id="spanButtonClose">&times;</span>
                <h2>Acerca de la página</h2>
                <p>Esta página está diseñada para recibir quejas y sugerencias de los usuarios del Instituto Tecnológico
                    de Cd. Juárez.</p>
                <p>Esperamos mejorar constantemente con tu retroalimentación.</p>
            </div>
        </div>
    </section>
    <aside>
        BUZÓN DE QUEJAS
    </aside>
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
        acercaVentana = document.getElementById("aboutVentanaAcercaPagina");
        acercaButton = document.getElementById("acercaButton");
        spanCloseButton = document.getElementById("spanButtonClose"); // Cambié 'close' a 'spanButtonClose'

        // Mostrar la ventana de acerca de la página
        acercaButton.addEventListener("click", () => {
            acercaVentana.style.display = "block";
        });

        // Cerrar la ventana al hacer clic en la "x"
        spanCloseButton.addEventListener("click", () => {
            acercaVentana.style.display = "none"; // Cambié 'block' a 'none'
        });

        // Cerrar la ventana al hacer clic fuera de ella
        window.onclick = function (event) {
            if (event.target === acercaVentana) { // Cambié 'ventana' a 'acercaVentana'
                acercaVentana.style.display = "none";
            }
        };

        // Cerrar la ventana de acercaVentana por defecto
        window.addEventListener("load", () => {
            acercaVentana.display = "none";
        });
    });
</script>

</body>
</html>
