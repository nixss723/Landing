<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Consulta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #d80000;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado del envío de consulta</h2>
        <?php
        if(isset($_POST['submit'])) {
            // Recoge los datos del formulario
            $nombre = $_POST['nombre'];
            $empresa = $_POST['empresa'];
            $email = $_POST['email'];
            $consulta = $_POST['consulta'];

            // Destinatario del correo
            $destinatario = "correo@dominio.com";

            // Asunto del correo
            $asunto = "Consulta de $nombre desde el formulario de contacto";

            // Cuerpo del correo
            $mensaje = "Nombre: $nombre\n";
            $mensaje .= "Empresa: $empresa\n";
            $mensaje .= "Correo electrónico: $email\n\n";
            $mensaje .= "Consulta:\n$consulta";

            // Cabeceras del correo
            $cabeceras = "From: $email";

            // Envía el correo
            if(mail($destinatario, $asunto, $mensaje, $cabeceras)) {
                echo "<p class='success'>Correo enviado correctamente. Nos pondremos en contacto contigo pronto.</p>";
            } else {
                echo "<p class='error'>Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo más tarde.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
