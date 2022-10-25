<?php 
    session_start();
?>
<!DOCTYPE php>
<php lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Xbox</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../../css/style_noticia.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="../../../assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../../assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../../assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../../assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../../assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../../assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../../assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../../../assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../../assets/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <!-- ------------------------------head--------------------------------------- -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../../index.php">
          <img src="../../../assets/img/logo.png" alt="Logo" width="170" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item pr-3">
              <a class="nav-link light mypadding" aria-current="page" href="../../../index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle light active mypadding" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Noticias</a>
              <ul class="dropdown-menu dropdown-menu-dark mycolor">
                <li><a class="dropdown-item" href="../../pc.php">PC</a></li>
                <li><a class="dropdown-item active" style="background-color: #107C10" href="../../xbox.php">Xbox</a></li>
                <li><a class="dropdown-item" href="../../ps.php">Play Station</a></li>
                <li><a class="dropdown-item" href="../../nintendo.php">Nintendo</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="../../contacto.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="../../shop.php">Tienda</a>
            </li>
          </ul>
          
          <?php 
            if(empty($_SESSION['username'])==true){ ?>
                <a href="../../login.php" class="navbar-text btn btn-success m1 m3">
                  Login
                </a>
                <a href="../../signup.php" class="navbar-text btn btn-light m2">
                  Sign Up
                </a>
            <?php } ?>  

            <?php if(empty($_SESSION['username'])==false){ ?>
              <li class="nav-item dropdown perfil-1">
              <a class="nav-text dropdown-toggle btn btn-success perfil-2 m1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark mycolor">
                  <?php
                      if($_SESSION['username'] == "Jaime Jaramillo"){ ?>
                        <li><a class="dropdown-item" href="../../admin.php">Administrador</a></li>
                      <?php }
                  ?>
                  <li><a class="dropdown-item" href="../../perfil.php">Ver Perfil</a></li>
                  <li><a class="dropdown-item" href="../../../php/logout.php">Cerrar Sesión</a></li>
                  <li><a class="dropdown-item" href="../../../php/eliminar.php">Eliminar Cuenta</a></li>
                </ul>
              </li>
            <?php }  
          ?>

        </div>
      </div>
    </nav>
  </header>
  <!-- ------------------------------main--------------------------------------- -->
  <main>
    <!-- ----------------------------------------------------------Noticias--------------------------------------------------- -->
    <div class="container pt-3 pb-2 container-principal">
      <div class="row mymargen">
        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
          <div class="container">
            <h1>Así es el nuevo tráiler de Death Stranding que celebra su llegada a PC Game Pass.</h1>
            <a href="../../xbox.php" class="btn btn-sm mb-2 boton-xbox">Xbox</a>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo Pérez - </small>
              <small>20 Agosto, 2022</small>
            </p>
            
            <p>Microsoft ha anunciado que Death Stranding llegará a PC Game Pass el próximo martes 23 de agosto. La compañía ya había anticipado "sorpresas" cuando presentaron los títulos de Xbox Game Pass de la segunda mitad de agosto. Death Stranding está disponible en PC desde julio de 2020, ocho meses después de su estreno en PS4. Así que ahora, para celebrar su llegada a PC Game Pass, Xbox ha publicado un nuevo tráiler de Death Stranding en su canal de YouTube.</p>

            <img src="../../../assets/img/noticia2/deathstranding-biggestchanges-br-1632342238522.jpg" alt="Imagen de Mordhau" class="carta__image img-fluid mt-2 mb-3 imagen">
  
            <p>La editora del juego en ordenador, 505 Games, ha aclarado en Twitter que se trata de la versión base del juego, por lo que no incluirá el contenido de Death Stranding Director's Cut: varias misiones adicionales, un área de combates temporizados, nuevos utensilios, una pista de carreras y otros extras. En la ficha de la Tienda Microsoft no se indica ninguna manera de actualizar a esta versión, algo que en Steam y Epic Games Store cuesta 10 euros.</p>
  
            <p>"Para aquellos que no saben, Death Stranding tiene que ver con la importancia de las conexiones; estamos muy emocionados de conectar a más jugadores con este mundo y esta comunidad verdaderamente maravillosa. En los últimos años, hemos tenido la suerte de interactuar con tantos jugadores y realizar múltiples eventos comunitarios a través de nuestros canales sociales oficiales. ¡Pronto los miembros de PC Game Pass podrán unirse a estas actividades futuras!"</p>
  
            <p>Por lo demás, la edición para PC Game Pass contará con las mismas funcionalidades que en las versiones de esos dos iniciadores: compatibilidad con monitores ultrapanorámicos, tasa de fotogramas por segundo desbloqueada, modo foto y contenidos crossover de Half-Life y Cyberpunk 2077, además de compatibilidad con tecnologías como Nvidia DLSS.</p>

            <div class="ratio ratio-16x9 mt-2 mb-3 media">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/xU7upwYVDSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <p>Aunque el estudio independiente Kojima Productions es la desarrolladora de Death Stranding, la saga es propiedad de Sony Interactive Entertaintment. Sin embargo, no es la primera vez que una serie de la compañía de PlayStation llega a Game Pass. MLB The Show 21 y MLB The Show 22, producidos por el San Diego Studio de Sony, se estrenaron desde el día de lanzamiento en Xbox Game Pass para consolas.</p>

            <p>505 Games, la editora del juego en PC, ha colocado muchos de sus títulos en Xbox Game Pass y PC Game Pass, como Control y el próximo Eiyuden Chronicle: Hundred Heroes. Por otro lado, Kojima Productions colabora con Xbox Game Studios en el desarrollo de un videojuego que utilizará Xbox Cloud Gaming.</p>

            <p class="link">Fuente: <a href="https://vandal.elespanol.com/noticia/1350755893/death-stranding-llegara-a-xbox-game-pass-para-pc-la-semana-que-viene/" target="_blank" class="link-color">Vandal</a></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <!-- <h3>Reviews</h3>  -->
          <img src="../../../assets/img/adds/pub4.jpg" class="img-fluid mt-2 mb-4" alt="Publicidad">
          <img src="../../../assets/img/adds/pub8.jpg" class="img-fluid mb-4" alt="Publicidad">
        </div>
      </div>
    </div>
    <!-- Boton de ir hacia arriba -->
    <button onclick="topFunction()" id="botonUp">
      <i class="fa-solid fa-angle-up"></i>
    </button>
  </main>
  <!-- ------------------------------footer--------------------------------------- -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
      </section>
      <!-- Section: Social media -->
      <section>
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <a href="../../contacto.php" class="btn btn-outline-light mb-4">Contáctanos</a>
            </div>
          </div>
      </section>
      <section class="mb-4">
        <p>
          GamesPortal es un sitio web donde encontrarás las noticias más relevantes y recientes del mundo del gaming, sin importar si te gusta cierta consola, compañia o estudio de videojuegos, seguro habrá al menos una noticia que querrás leer.
        </p>
      </section>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      GamesPortal© 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/" target="_blanck">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="../../../js/button-up.js"></script>
</body>

</php>