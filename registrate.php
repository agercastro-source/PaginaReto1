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
        <h2>Regístrate en nuestra página</h2>
        <p>¡Crea tu cuenta para poder enterarte de nuestras ofertas!</p>

        <form action="registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Pablo" required>
            <br><br>
            <label for="Apellido">Apellido:</label>
            <input type="text" id="lnombre" name="apellido" placeholder="Gutiérrez" required>
            <br><br>
            <label for="Correo">Correo Electrónico:</label>
            <input type="email" id="cnombre" name="correo" placeholder="Correo@Electrónico" required>
            <br><br>
            <label for="DNI">DNI:</label>
            <input type="text" id="DNI" name="DNI" placeholder="12345678X" required>
            <br><br>
            <label for="tlf">Numero de teléfono:</label>
            <input type="text" id="tlf" name="telefono" placeholder="123456789" required>
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <br><br>
            <label for="password">Confirmar contraseña:</label>
            <input type="password" id="confirmar" name="confirmar" placeholder="Contraseña" required>
            <br><br>
            <div class="checkbox">
                <input type="checkbox" id="terminos">
                <label for="terminos">Acepto los <a href="#">términos y condiciones</a></label>
            </div>

            <button class="Registrarse">Registrarse</button>
        </form>
    </section>
</main>

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
</html>