<?php

    //Se filtra para que el metodo del formulario html sea POST, si no el código no se generará
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        //Se guardan en variables los datos enviados por el html en un array asociativo.
        //Con htmlspecialchars se evita la ejecucion de código malicioso
        //con $_POST['nombreDelName'] se coge el dato introducido en el input del html
        $datos = array( 'nombre' => htmlspecialchars($_POST['nombre']), 'correo' => htmlspecialchars($_POST['correo']), 'mensaje' => htmlspecialchars($_POST['mensaje']) );

        //Se crea una frase con los datos y se introduce un salto de línea para que se guarde línea a línea en el archivo
        $mensajeGuardar = "Nombre: " . $datos['nombre'] . ", correo: " . $datos['correo'] . ", mensaje: " . $datos['mensaje'] . PHP_EOL;

        file_put_contents("datos.txt", $mensajeGuardar, FILE_APPEND);

        echo "Se han recibido y guardado los datos. ¡Gracias!";

        // Mostrar mensaje y redirigir al index con JavaScript
        echo "<script>
                alert('¡Datos guardados correctamente!');
                window.location.href = 'index.html';
            </script>";
    }



?>