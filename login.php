<?php session_start(); ?>
<html lang="en">
<head>
    <title>Iniciar Sesión - Puchaina Equipments</title>
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
    <section class="login">
      <h2>Inicia sesión</h2>
      <p>Accede a tu cuenta para ver tus ofertas.</p>

      <form action="procesar-login.php" method="POST">
        <label class="label2" for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label class="label2" for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="password" required> <br><br><br>

        <button type="submit">Entrar</button>

        <p class="registro-link">
          ¿Eres nuevo cliente?
          <a href="registrate.php">Crear cuenta</a>
        </p>
      </form>
      
      <br>
      <a href="lista.php">
            <button>Lista Usuarios</button></a>
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
        </div>
</footer>
</body>
</html>