<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Icon" href="assets/img/favicon.ico">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Los Jardines</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar" style="background-color: #1fae47;border: 1px solid #000000;padding: 20px;">
    <div class="container">
        <!-- Logo o nombre de la aplicación -->
        <img src="assets/img/logo.png" alt="" style="height: 40px; padding-right: 10px">
        <a class="navbar-brand" href="index.php">Urbanización Los Jardines</a>

        <!-- Botón para mostrar el menú en dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del menú -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            
        <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                La Urbanización
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="about.php">Nosotros</a></li>
                                <li><a class="dropdown-item" href="comunicados.php">Comunicados</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="otros.php">Otros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="servicio.php">Servicios</a></li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="publica.php">Ofrece Servicios</a></li>
                            </ul>
                        </li>
                <li class="nav-item">
                    <a class="nav-link" href="tramites.php">Tramites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos.php">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Intranet</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
     
    <!-- Carousel Start -->
    <style>
        .carousel-item img {
            max-height: 600px; /* Establece la altura máxima deseada */
            width: auto; /* Asegura que el ancho se ajuste automáticamente para mantener la relación de aspecto */
        }
    </style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/carrusel_01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carrusel_02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carrusel_03.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    <!-- Carousel End -->

     <!-- Contenido de la página -->
     <div style="background-color: #2a3137; padding: 20px;">
        <div class="container" >
            <h1 style="color: white;">Contactanos para mayor Información</h1>
            <h5 class="display-6 mb-4" style="color: #1fae47;">Si tienes alguna duda, escribenos!</h5>
        </div>
    </div>

    <div class="container-xxl" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="container">
            <div class="row ">
                <div class="col wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                    <img  src="assets/img/logo.png" alt=""
                            style="width: 350px; height: 350px;">
                    </div>

                </div>
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    
                    <form id="formulario">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Tu nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Tu correo</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here"
                                        id="message" style="height: 150px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <script>
        $(document).ready(function () {
            // Escuchamos el evento submit del formulario
            $('#formulario').submit(function (event) {
                // Detenemos el envío del formulario normal
                event.preventDefault();

                // Obtenemos los valores del formulario
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();

                // Creamos un objeto con los datos del formulario
                var formData = {
                    name: name,
                    email: email,
                    subject: subject,
                    message: message
                };

                // Enviamos los datos a través de AJAX
                $.ajax({
                    type: "POST",
                    url: "formulario.php", // Reemplaza "tuarchivophp.php" con el nombre de tu archivo PHP
                    data: formData,
                    success: function (data) {
                        // Manejar la respuesta del servidor si es necesario
                        console.log(data);
                        // Puedes mostrar un mensaje de éxito o redirigir al usuario, dependiendo de tu lógica

                        // Limpiamos los campos del formulario después del envío exitoso
                        $('#formulario')[0].reset();
                    },
                    error: function (error) {
                        // Manejar errores si es necesario
                        console.log(error);
                    }
                });
            });
        });
    </script>
    
<div style="padding: 20px;">

</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer" style="padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="mb-4">Urbanización</h4>
                    <p>Lima, Peru</p>
                    <p>Urb. Los Jardines</p>
                    <p>Teléfono: 01 777-7777</p>
                    <p>Email: info@example.com</p>
                </div>
                
                <div class="col">
                    <h4 class="mb-4">Redes sociales</h4>
                    <p>Síguenos en nuestras redes sociales.</p>
                    <p><a class="btn" style="color: white;" href="#">Facebook</a></p>
                    <p><a class="btn" style="color: white;" href="#">Twitter</a></p>
                    <p><a class="btn" style="color: white;" href="#">Instagram</a></p>
                </div>
                <div class="col">
                    <h4 class="mb-4">Enlaces útiles</h4>
                    <p><a class="btn" style="color: white;" href="about.php">Acerca de Nosotros</a></p>
                    <p><a class="btn" style="color: white;" href="tramites.php">Tramites</a></p>
                    <p><a class="btn" style="color: white;" href="#">Intranet</a></p>
                    <p><a class="btn" style="color: white;" href="contactanos.php">Contactanos</a></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Footer End -->

<div  style="padding-top: 20px; background-color: #13181d;">
    <div class="text-center">
        &copy; <a href="#">Edukapital</a><span style="color: white"> Todos los derechos reservados.</span>
    </div>
</div>


    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>