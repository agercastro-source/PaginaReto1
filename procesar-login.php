<?php
    $conexion = new mysqli("sql303.infinityfree.com", "if0_41273296", "24Ager08", "if0_41273296_puchaina");

    $conexion->set_charset("utf8");

    
    $correo = $_POST['correo'];
    $contrasenia = $_POST['password'];

    
    $sql = "SELECT Nombre FROM clientes WHERE Correo_Electronico = '$correo' AND Contrasenia = '$contrasenia'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        
        $usuario = $resultado->fetch_assoc();
        
        
        session_start();
        $_SESSION['usuario'] = $usuario['Nombre'];

        
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