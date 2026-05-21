<?php session_start(); ?>
<hmtl>
<head>
    <title>Servicios - Puchaina Equipments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>


<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="logoempresa">
            <a class="txtlogo" href="index.php"><h1>PUCHAINA EQUIPMENTS</h1></a>
        </div>
<nav>
    <a href="index.php">Inicio</a>
    <a href="servicios.php">Servicios</a>
    <a href="Productos.php">Productos</a>
    <a href="contacto.php">Contacto</a>
    <a href="juego.php">Juego</a>
    
    <?php if (isset($_SESSION['usuario'])): ?>
        <a href="#" style="color: #2ecc71;"> <?php echo $_SESSION['usuario']; ?></a>
        <a href="cerrar-sesion.php" style="color: #e74c3c;">(Salir)</a>
    <?php else: ?>
        <a href="login.php">Mi Cuenta</a>
    <?php endif; ?>
</nav>
    </header>


<main>
    <section class="registro">
        <h2>Éxito al crear la cuenta</h2>
        <p>¡Tu cuenta ha sido creada con éxito, disfruta ahora de novedades y ofertas personalizadas!</p>
        <a href="lista.php">
            <button >Ver lista de usuarios</button>
        </a>
    </section>
</main>
<br><br><br><br><br><br><br>
<footer>
        <div class="columna">
            <h4>¡Síguenos!</h4>
            <div class="redes">
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram">Instagram</i></a><br><br><p>-</p>
                <a href="https://www.facebook.com/?locale=es_ES/"><i class="fa-brands fa-facebook-f">Facebook</i></a><br><br><p>-</p>
                <a href="https://x.com/?lang=es"><i class="fa-brands fa-x-twitter">Twitter</i></a><br><br><p>-</p>
                <a href="https://es.linkedin.com/"><i class="fa-brands fa-linkedin-in">LinkedIn</i></a><br><br><p>-</p>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube">YouTube</i></a><br><br>
            </div>
            <p><strong>Correo:</strong> puchaina.equipments@gmail.com <br>
            <strong>Teléfono:</strong> 600 123 456 <br>
            <strong>Dirección:</strong>Bo. San Juan, 16</p>
            <p>© 2025 Puchaina Equipments · Todos los derechos reservados</p>
    </footer>
</body>