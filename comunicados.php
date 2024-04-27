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

    <div class="container" style="padding: 50px;">
    <div class="container" style="padding: 50px; background-color:#13181d; border-radius: 10px;">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-4" style="padding-top: 15px;color: white;">Comunicados de la Urbanización
            </h1>
        </div>
    


    <div class="faq-container">
        <div class="question" onclick="toggleAnswer(1)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_1">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>
        <!-- Agrega más preguntas y respuestas aquí -->
        <div class="question" onclick="toggleAnswer(2)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_2">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>

        <div class="question" onclick="toggleAnswer(3)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_3">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>

        <div class="question" onclick="toggleAnswer(4)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_4">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>

        <div class="question" onclick="toggleAnswer(5)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_5">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>

        <div class="question" onclick="toggleAnswer(6)">
            Comunicado "Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent"
        </div>
        <div class="answer" id="answer_6">
            Anuncio: "Y" Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis praesent, fames 
            posuere quisque penatibus neque dis vel vestibulum pellentesque porta, mattis rutrum dictum pharetra 
            eu ornare bibendum tristique.
        </div>
    </div>
    </div>
    </div>
    <style>
        .faq-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .question {
            cursor: pointer;
            font-weight: bold;
            padding: 20px;
            border: 1px solid #000000;
            background-color: #00ad51;
            border-radius: 10px;
        }

        .answer {
            display: none;
            padding: 10px;
            background-color: #dbe0e6;
            border: 1px solid #000000;
            border-radius: 10px;
        }
    </style>


    <script>
        function toggleAnswer(id) {
            const answer = document.getElementById(`answer_${id}`);
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        }
    </script>
    <div style="padding: 10px;"></div>
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

</div>

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>