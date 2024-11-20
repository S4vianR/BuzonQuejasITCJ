<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="./styles/buzon.css">
    <title>Buzón de Quejas</title>
</head>
<body>
<?php
session_start();
$nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : "usuario";
?>
<header>
    <nav>
        <div>
            <img src="./assets/LogoITCJ.png" alt="Logo ITCJ">
            <h2>
                <?php
                echo "Bienvenido, $nombreUsuario";
                ?>
            </h2>
        </div>
        <div>
            <button id="acercaButton">Acerca de la página</button>
            <form action="logout.php" method="post" style="display:inline;">
                <button type="submit">Cerrar Sesión</button>
            </form>
        </div>
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
            <div>
                Aquí va el buzón de quejas
            </div>
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
</body>
</html>