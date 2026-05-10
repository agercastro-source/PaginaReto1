<?php

$conexion = new mysqli("sql303.infinityfree.com", "if0_41273296", "24Ager08", "if0_41273296_puchaina");

$conexion->set_charset("utf8");


$usuarios = $conexion->query("SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de Usuarios - Puchaina Equipments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> </head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="logoempresa">
            <a class="txtlogo" href="index.html"><h1>PUCHAINA EQUIPMENTS</h1></a>
        </div>
       <nav>
            <a href="index.html">Inicio</a>
            <a href="servicios.html">Servicios</a>
            <a href="login.html">Mi Cuenta</a>
            <a href="Productos.html">Productos</a>
            <a href="contacto.html">Contacto</a>
            <a href="juego.html">Juego</a>
        </nav>
    </header>

    <main>
        <section class="registro">
            <h2>Usuarios Registrados</h2>
            <p>Aquí puedes ver todos los clientes que se han unido a Puchaina Equipments:</p>
            
            <div style="overflow-x:auto;"> <table style="width:100%; border-collapse: collapse; margin-top: 20px; color: #333; background: white;">
                    
                        <tr style="background-color: #333; color: white;">
                            <th style="padding: 10px; border: 1px solid #ddd;">Nombre</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Apellido</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">DNI</th>
                        </tr>
                    
                    
                        <?php
                        
                        while ($fila = $usuarios->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $fila['Nombre'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $fila['Apellido'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $fila['Correo_Electronico'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $fila['DNI'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    
                </table>
            </div>

            <br>
            <a href="index.html" style="text-decoration:none;">
                <button style="cursor:pointer; padding: 10px 20px;">Volver al Inicio</button>
            </a>
        </section>
    </main>

    <footer>
        <p>© 2025 Puchaina Equipments · Todos los derechos reservados</p>
    </footer>

    <?php $conexion->close(); ?>
</body>
</html>