<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Reacondicionado</title>
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
        <a href="cerrar-sesion.php" style="color: #e74c3c;">Cerrar Sesion</a>
    <?php else: ?>
        <a href="login.php">Mi Cuenta</a>
    <?php endif; ?>
</nav>
    </header>
    <section class="Nosotros">
        <h1>¿Quienes Somos?</h1>
        <p>En <b>Puchaina Equipments</b> somos una empresa encargada del reacondicionamiento de equipos informáticos y de su venta, <br> dándole asi una segunda vida a estos </p>
        <br><br>
    </section>
     <h3 class="Pdestac">Productos Destacados</h3><br>
    <div class="productosdestacados">
        <div class="producto1">
            <h4>Portátil Hp Elite Book</h4>
            <img src="producto1.jpg" alt="producto1">
            <p>Portátil gama media reacondicionado</p>
            <p><b>500€</b></p>
            <a href="Productos.html">
                <button class="Producto">Más Información</button>
            </a>
        </div>
        <div class="producto2">
            <h4>Pórtatil Acer Aspire 3</h4>
            <img src="producto2.jpg" alt="producto2">
            <p>Portátil gama baja reacondicionado</p>
            <p><b>300€</b></p>
             <a href="Productos.html">
                <button class="Producto">Más Información</button>
            </a>
        </div>
        <div class="producto3">
            <h4>Pórtatil MSI Prestige</h4>
            <img src="producto3.jpg" alt="producto3">
            <p>Pórtatil gama alta reacondicionado</p>
            <p><b>900€</b></p>
            <a href="Productos.html">
                <button class="Producto">Más Información</button>
            </a>
        </div>
    </div>


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