<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Web de Control de Registro y Venta de la empresa VIPREAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/styles.css" />
</head>
<body>
    <div class="head">
        <div class="logo">
            <a href="#"><img src="img/logo.jpg" alt="Logo" /></a>
        </div>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#productos">Productos</a>
            <a href="#precio">Precio</a>
            <a href="#contacto">Contacto</a>
            <a href="#ubicacion">Ubicación</a>
            <a href="#acerca">Acerca de</a>
            <a href="login.php" id="login-btn">Iniciar Sesión</a>
        </nav>
    </div>
    <!-- SECCION LOGIN -->
    <?php
    // Puedes incluir el formulario de inicio de sesión aquí si lo tienes en un archivo separado
    // include('login-form.php');
    ?>
    <!-- SECCION INICIO -->
    <header class="content header" id="inicio">
        <h2 class="title">Tipos de Viguetas</h2>
        <p>
            Las viguetas pretensadas son una combinación de hormigón de cemento
            tradicional con refuerzos (barra de acero), esta mezcla está hecha para
            utilizar la resistencia a la compresión y al mismo tiempo la resistencia
            a la tracción, por lo tanto, ambos materiales trabajan juntos para
            resistir muchos tipos de carga.
        </p>
        <div class="btn-home">
            <a href="#" class="btn">Saber más</a>
        </div>
    </header>
    <!-- SECCION PRODUCTOS -->
    <section class="content sau" id="productos">
        <h2 class="title">Productos</h2>
        <p>
            La empresa “Vipreal” se dedica a la venta y fabricación de viguetas
            pretensadas al por mayor y menor además ofrece apoyo de personal para
            las obras de construcción como ser: vaciado de loza, de obra fina,
            gruesa y maquinarias para la construcción.
        </p>
        <div class="box-container">
            <div class="box">
                <img src="img/vigueta1.jpeg" alt="Vigueta 1" />
                <h3>Vigueta Tipo 1</h3>
                <p>Precio: $100</p>
            </div>
            <div class="box">
                <img src="img/vigueta2.jpeg" alt="Vigueta 2" />
                <h3>Vigueta Tipo 2</h3>
                <p>Precio: $150</p>
            </div>
            <div class="box">
                <img src="img/vigueta3.jpeg" alt="Vigueta 3" />
                <h3>Vigueta Tipo 3</h3>
                <p>Precio: $200</p>
            </div>
        </div>
    </section>
    <!-- SECCION PRECIO -->
    <section class="content price" id="precio">
        <article class="contain">
            <h2 class="title">Precio</h2>
            <p>
                Los modelos de viguetas fabricados por "Vipreal" son personalizados
                según las necesidades específicas de cada cliente, garantizando
                productos de alta calidad, estas viguetas están reforzadas con un
                alambre de doble enrollado, lo que proporciona una resistencia y
                durabilidad superiores, esta técnica de refuerzo asegura que las
                viguetas puedan soportar cargas pesadas y condiciones exigentes,
                ofreciendo un rendimiento fiable en diversos proyectos de
                construcción.
            </p>
            <a href="#" class="btn">Saber Precios </a>
        </article>
    </section>
    <!-- SECCION CONTACTOS -->
    <section class="content contact" id="contacto">
        <h2 class="title">Contactos</h2>
        <p><i class="fab fa-whatsapp">72281902-76400411</i></p>
    </section>
    <!-- SECCION UBICACION -->
    <section class="content ubi" id="ubicacion">
        <h2 class="title">Ubicación</h2>
        <p>Lado OTB Molle Molle, Unnamed Road, Sacaba</p>
        <div id="map"></div>
        <script src="JS/mapavipreal.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?AIzaSyCA-1wgFUJJSluYkeunv2foPbzGzeE4Kkk=YOURKEY&callback=iniciarMapa" async defer></script>
    </section>
    <!-- SECCION ACERCA DE REDES SOCIALES -->
    <section class="content reds" id="acerca">
        <h2 class="title">Acerca de Nosotros en las redes</h2>
        <p>Nos encontramos en las siguientes redes sociales como ser:</p>
        <div class="box-container">
            <div class="box">
                <i class="fab fa-facebook"></i>
                <h3>Facebook</h3>
                <p>Apoyanos comentado y compartiendo en las redes.</p>
            </div>
            <div class="box">
                <i class="fab fa-instagram"></i>
                <h3>Instagram</h3>
                <p>Mandanos un comentario hacerca de que te parece la empresa vipreal.</p>
            </div>
            <div class="box">
                <i class="fab fa-tiktok"></i>
                <h3>TikTok</h3>
                <p>Siguenos en nuestra plataforma y dale al corazon.</p>
            </div>
        </div>
    </section>
    <!-- SECCION DE LOGIN -->
    <script>
        // Botón de inicio de sesión
        document.getElementById('login-btn').addEventListener('click', function() {
            var form = document.querySelector('.login-form');
            form.style.display = form.style.display === 'block' ? 'none' : 'block';
        });
        // Botón de cierre
        document.querySelector('.close-btn').addEventListener('click', function() {
            var form = document.querySelector('.login-form');
            form.style.display = 'none';
        });
    </script>
</body>
</html>
