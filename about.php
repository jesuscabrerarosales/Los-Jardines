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
<nav class="navbar navbar-expand-lg navbar" style="background-color: #1fae47;border: 1px solid #000000; padding: 20px">
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

    

     <!-- About Start -->
     <div class="container-xxl" style="padding-bottom: 80px;padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col" style="padding-bottom: 20px; padding-left: 100px;" >
                    <div  style="max-width: 400px;">
                        <img  src="assets/img/logo.png" alt=""
                            style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <h6 class="text-uppercase mb-2" style="color:#343a40">Acerca de la Urbanización</h6>
                        <h1 class="display-6 mb-4">En La Urbanización Los Jardines</h1>
                        <p>Nos enorgullece ofrecer un estilo de vida único en un entorno 
                            tranquilo y armonioso. Situada en el corazón de la ciudad, nuestra urbanización ofrece un 
                            refugio sereno del ajetreo y el bullicio de la vida urbana, mientras que aún está convenientemente 
                            cerca de todas las comodidades que necesitas.

                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-6" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row g-5">                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">RECORDEMOS</h6>
                        <h1 class="display-6 mb-4">Un poco de historia</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus 
                            tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices 
                            diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec 
                            nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. 
                            Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. </p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
                            Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
                            Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod 
                            non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum 
                            diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, 
                            pretium a, enim. Pellentesque congue. 
                        </p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Los Jardines
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden " style="min-height: 600px;">
                        <img class="position-absolute w-100 h-100" src="assets/img/historia.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>


 </main>

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