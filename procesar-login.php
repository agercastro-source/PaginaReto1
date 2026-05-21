<?php
    $conexion = new mysqli("sql303.infinityfree.com", "if0_41273296", "24Ager08", "if0_41273296_puchaina");

    $conexion->set_charset("utf8");

    // Recogemos lo que el usuario escribe en el formulario de login
    $correo = $_POST['correo'];
    $contrasenia = $_POST['password'];

    // Buscamos en la base de datos si coinciden correo y contraseña
    $sql = "SELECT Nombre FROM clientes WHERE Correo_Electronico = '$correo' AND Contrasenia = '$contrasenia'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // ¡Coincide! Sacamos el nombre de la fila encontrada
        $usuario = $resultado->fetch_assoc();
        
        // Abrimos sesión y guardamos su nombre para cambiar la interfaz
        session_start();
        $_SESSION['usuario'] = $usuario['Nombre'];

        // Redirigimos al juego (recuerda renombrar juego.html a juego.php)
        header("Location: index.php"); 
        exit();
    } else {
        echo "<script>
                alert('Correo o contraseña incorrectos. Inténtalo de nuevo.');
                window.location.href = 'login.html';
              </script>";
    }

    $conexion->close();
?>