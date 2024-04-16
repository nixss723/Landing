<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lpmarketing</title>
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="icon" href="Imgs/Logo/logo final-8.png">
    
</head>
<body>
    <header class="header-contacto">
        <div class="logo-contacto">
            <a href="index.php">
                <img src="Imgs/Logo/logo final-8.png" alt="Logo de la empresa" width="50" height="50">
            </a>
        </div>
        <nav>
            <ul class="nav-list-contacto">
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </nav>
        <a href="http://lpm.sulg.com.ar/Account/Login?expiredSession=true" class="btn-contacto">Acceso clientes</a>
    </header>

    <div class="contacto"> 
        <h1 class="contactoh1"> Contacto </h1>
    <div class="contenedor-flex">

        <div class="formulario-container">
            <form action="consulta_enviada.php" method="POST" class="formulario">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
        
                <div class="campo">
                    <label for="empresa">Empresa</label>
                    <input type="text" id="empresa" name="empresa">
                </div>
        
                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
        
                <div class="campo">
                    <label for="consulta">Tu consulta</label>
                    <textarea id="consulta" name="consulta" rows="4" required></textarea>
                </div>
        
                <button type="submit">Enviar</button>
            </form>
        </div>
        

        <div class="infoConta">
            <div class="cuadro">
                <div class="tel">
                    <img class="imgtel" src="Imgs/iconos/noun-phone-6210269.png" alt="imagen de un telefono" width="50" height="50">
                    <p>2304424096</p> 
                </div>

                <div class="correo">
                    <img src="Imgs/iconos/noun-mail-1058930.png" alt="imagen de un correo" width="50" height="50"> 
                    <p>info@lpmarketing.com.ar</p>
                </div>

                <div class="ubi">
                    <img src="Imgs/iconos/noun-office-1178945.png" alt="imagen de un edificio" width="50" height="50"> 
                    <p>Pablo Ricchieri 610, Pilar, Buenos Aires</p>
                </div>

                <div class="insta">
                    <img src="Imgs/iconos/Instagram-White-circle.png" alt="" width="50" height="50"> 
                    <p>Ip_marketing_</p>
                </div>
            </div>
        </div>
        
    </div>   

    <footer class="footer">
        <div class="contenedorfooter">
            <div class="infofotter">
                <h2>Inicio</h2>
                <br>
                <p>Nuestros Servicios</p>
                <br>
                <p>Nuestros Clientes</p>
                <br>
                <p>Nuestros Trabajos</p>
            </div>

            <div class="contactofooter">
                <h2>Contacto</h2>
                <br>
                <p>2304424096</p> 
                <br>
                <p>info@lpmarketing.com.ar</p>
                <br>
                <p>Pablo Ricchieri 610, Pilar, Buenos Aires</p>
                <br>
                <div class="instafoot">
                    <p>Ip_marketing_</p>
                    <img src="Imgs/iconos/Instagram-White-circle.png" alt="" width="30" height="30"> 
                </div>

            </div>
        </div>
    </footer>
    
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
