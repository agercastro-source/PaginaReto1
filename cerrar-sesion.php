<?php
    // 1. Conectamos con la sesión existente
    session_start();

    // 2. Vaciamos todas las variables guardadas (como $_SESSION['usuario'])
    session_unset();

    // 3. Destruimos por completo la sesión en el servidor
    session_destroy();

    // 4. Redirigimos al usuario al índice limpio
    header("Location: index.php");
    exit();
?>