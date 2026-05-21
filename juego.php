<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Juego - Puchaina Equipments</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <style>
        .pantalla-juego { text-align: center; padding: 20px; }
        .palabra-oculta { font-size: 2.5em; letter-spacing: 15px; margin: 20px 0; color: #333; }
        .vidas { font-size: 1.5em; color: #e74c3c; margin-bottom: 20px; }
        .mensaje-final { font-weight: bold; font-size: 1.2em; margin-top: 15px; }
        input[type="text"] { padding: 10px; width: 40px; text-align: center; font-size: 1.2em; }
    </style>
</head>
<body>
    <main>
        <section class="registro pantalla-juego">
            <h2>El Ahorcado de PuchainaEquipments</h2>
            <p>Adivina la palabra secreta antes de quedarte sin intentos.</p>
            
            <div class="vidas">Vidas restantes: <span id="contador-vidas">6</span> </div>
            <div class="palabra-oculta" id="contenedor-palabra"></div>
            
            <input type="text" id="letra-usuario" maxlength="1" placeholder="?">
            <button onclick="comprobarLetra()">Probar letra</button>

            <p id="mensaje-final" class="mensaje-final"></p>
            <br>
            <button onclick="location.reload()">Reiniciar Juego</button>
           
            <a href="index.php"><button>Al Inicio</button></a>
        </section>
    </main>

    <script>
        const palabras = ["PUCHAINA", "TECLADO", "MONITOR", "CLIENTE", "EQUIPO", "CODIGO"];
        let palabraSecreta = palabras[Math.floor(Math.random() * palabras.length)];
        let vidas = 6;
        let progreso = Array(palabraSecreta.length).fill("_");

        document.getElementById("contenedor-palabra").innerHTML = progreso.join(" ");

        function comprobarLetra() {
            let input = document.getElementById("letra-usuario");
            let letra = input.value.toUpperCase();
            input.value = ""; 
            input.focus();

            if (letra === "" || vidas <= 0) return;

            let acierto = false;

            for (let i = 0; i < palabraSecreta.length; i++) {
                if (palabraSecreta[i] === letra) {
                    progreso[i] = letra;
                    acierto = true;
                }
            }

            if (!acierto) {
                vidas--;
                document.getElementById("contador-vidas").innerHTML = vidas;
            }

            document.getElementById("contenedor-palabra").innerHTML = progreso.join(" ");

            verificarEstado();
        }

        function verificarEstado() {
            
            let mensaje = document.getElementById("mensaje-final");

            if (!progreso.includes("_")) {
                mensaje.innerHTML = "¡GANASTE! Apruebas el curso";
                mensaje.style.color = "green";
            } else if (vidas <= 0) {
                mensaje.innerHTML = "PERDISTE... Espabila que era: " + palabraSecreta;
                mensaje.style.color = "red";
            }
        }
    </script>
</body>
</html>