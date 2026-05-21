
<?php
    
    session_start(); 

    $conexion = new mysqli("sql303.infinityfree.com", "if0_41273296", "24Ager08", "if0_41273296_puchaina");

    $conexion->set_charset("utf8");
    
   
    $dni = $_POST['DNI'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $numero = $_POST['telefono'];
    $contrasenia = $_POST['password'];

    
    $sql = "INSERT INTO clientes (DNI, Nombre, Apellido, Correo_Electronico, Numero_Telefono, Contrasenia)
            VALUES ('$dni', '$nombre', '$apellido', '$correo', '$numero', '$contrasenia')";

    if ($conexion->query($sql) === TRUE) {
        
        
        $_SESSION['usuario'] = $nombre; 

        
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $conexion->error;
    }

    $conexion->close();
?>
