<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Play Station</title>
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
                <li><a class="dropdown-item" href="../../xbox.php">Xbox</a></li>
                <li><a class="dropdown-item  active" style="background-color: #0070D1" href="../../ps.php">Play Station</a></li>
                <li><a class="dropdown-item" href="../../nintendo.php">Nintendo</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="../../contacto.php">Cont??ctanos</a>
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
                  <li><a class="dropdown-item" href="../../../php/logout.php">Cerrar Sesi??n</a></li>
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
            <h1>Sony y el estudio Ballistic Moon colaboran en un juego con Unreal Engine 5.</h1>
            <a href="../../ps.php" class="btn btn-sm mb-2 boton-ps">PS</a>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo P??rez - </small>
              <small>20 Agosto, 2022</small>
            </p>

            <p>El estudio de desarrollo independiente Ballistic Moon est?? trabajando en un videojuego que se encuentra en las primeras etapas del desarrollo y que ser?? publicado por Sony Interactive Entertainment, seg??n ofertas de empleo difundidas por el medio Gematsu. Mencionado como Project Bates, el juego est?? siendo creado con Unreal Engine 5 por un equipo que tiene entre sus fundadores a desarrolladores de Until Dawn, House of the Dead: Overkill, Sleeping Dogs y Heavy Rain.</p>

            <img src="../../../assets/img/noticia2/plst2022816108511_2.jpg" alt="Imagen de Odin" class="carta__image img-fluid mt-2 mb-3 imagen">
  
            <p>La p??gina del estudio en la red social LinkedIn indica que est??n creando un juego "con una editora l??der mundial". La firma brit??nica no especifica en ninguno de sus comunicados que esa empresa es Sony, pero el curr??culum de un actor de captura de movimientos lista la empresa como "Ballistic Moon & Sony Interactive Entertainment", seg??n indica el usuario Toumari del foro ResetEra.</p>

            <p>Ese mismo curr??culum del actor que ha interpretado a dos personajes del juego es el que indica que el proyecto tiene el nombre en clave Project Bates. Adem??s, menciona que el director de la captura de movimientos es Joshua Archer, quien previamente ha cumplido la misma funci??n en t??tulos de Sony Interactive Entertainment, como Until Dawn y Horizon: Zero Dawn.</p>
            
            <img src="../../../assets/img/noticia2/plst2022816108511_3.jpg" alt="Imagen de GoW" class="carta__image img-fluid mt-2 mb-3 imagen">

            <p>Ballistic Moon es un estudio afincado en Farnborough, Reino Unido. En las ofertas de empleo publicadas en su web oficial indican que el proyecto est?? en las primeras fases del desarrollo. Aunque el equipo est?? formado en estos momentos por entre 35 y 40 empleados (una cifra muy escasa para una producci??n de alto presupuesto o AAA), describen Project Bates como un "gran nuevo proyecto".</p>

            <p>El estudio brit??nico fue fundado en 2019 por el director creativo Neil McEwan, quien cumpli?? la misma funci??n en House of the Dead: Overkill y el reboot de Syndicate; por el director de tecnolog??a Chris Lamb, que trabaj?? en Until Dawn y fue ingeniero principal de Until Dawn: Rush of Blood; y por el director de producci??n y negocio Duncan Kershaw, que ha trabajado en numerosas compa????as durante 30 a??os en t??tulos como Heavy Rain, Sleeping Dogs, Buscando a Nemo, Harry Potter y la piedra filosofal y la saga Madden NFL, entre otros.</p>

            <p class="link">Fuente: <a href="https://vandal.elespanol.com/noticia/1350755808/sony-y-el-estudio-ballistic-moon-colaboran-en-un-juego-con-unreal-engine-5/" target="_blank" class="link-color">Vandal</a></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <!-- <h3>Reviews</h3>  -->
          <img src="../../../assets/img/adds/pub8.jpg" class="img-fluid mt-2 mb-4" alt="Publicidad">
          <img src="../../../assets/img/adds/pub3.jpg" class="img-fluid mb-4" alt="Publicidad">
        </div>
      </div>
    </div>
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
              <a href="../../contacto.php" class="btn btn-outline-light mb-4">Cont??ctanos</a>
            </div>
          </div>
      </section>
      <section class="mb-4">
        <p>
          GamesPortal es un sitio web donde encontrar??s las noticias m??s relevantes y recientes del mundo del gaming, sin importar si te gusta cierta consola, compa??ia o estudio de videojuegos, seguro habr?? al menos una noticia que querr??s leer.
        </p>
      </section>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      GamesPortal?? 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/" target="_blanck">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="../../../js/button-up.js"></script>
</body>

</html>