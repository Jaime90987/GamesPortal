<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Nintendo</title>
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
                <li><a class="dropdown-item" href="../../ps.php">Play Station</a></li>
                <li><a class="dropdown-item active" style="background-color: #dd2020" href="../../nintendo.php">Nintendo</a></li>
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
            <h1>Xenoblade Chronicles 3: ??Cu??nto dura el nuevo exclusivo de Nintendo Switch?</h1>
            <a href="../../nintendo.php" class="btn btn-sm mb-2 boton-nintendo">Nintendo</a>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo P??rez - </small>
              <small>15 Agosto, 2022</small>
            </p>

            <img src="../../../assets/img/noticia1/cx4b59571b825f3a-1200x801.webp" alt="Imagen de X" class="carta__image img-fluid mt-2 mb-3 imagen">

            <p>Xenoblade Chronicles 3 acaba de aterrizar en la consola h??brida de la gran N, pero ya se ha coronado como uno de los t??tulos m??s destacados del verano. Tras un anuncio casi por sorpresa y no muchos meses de espera, lo nuevo de Nintendo Switch y Monolith Soft se ha convertido en uno de los juegos m??s vendidos en no pocos pa??ses. Y como viene siendo costumbre en este tipo de juegos, muchos usuarios ya se est??n formulando la eterna pregunta: ??Cu??nto dura Xenoblade Chronicles 3?</p>
  
            <p>A fin de cuentas, los JRPG suelen caracterizarse por su extensi??n, ya sea mediante misiones principales o secundarias. Y si bien es cierto que este no suele ser un elemento especialmente exacto para medir la calidad de un determinado lanzamiento, ayuda a determinar si es lo que uno busca o no. Por suerte, los amantes del g??nero est??n de enhorabuena: el juego tiene contenido de calidad para dar y regalar.</p>
  
            <p>Yendo directamente al grano, su duraci??n aproximada es de unas 40 o 50 horas. Esto es as?? siempre y cuando se utilice el nivel de dificultad m??s f??cil, ya que, al aumentar el grado de desaf??o, tambi??n suben las horas de farmeo. Por muy buena que sea la estrategia de cualquier jugador, Xenoblade Chronicles 3 exigir?? aumentar de nivel antes de luchar contra determinados jefes finales seg??n el modo de juego.</p>
  
            <p>As?? pues, si se aumenta la dificultad, es f??cil superar las 70 horas de juego. Esto es, no obstante, yendo a por la historia principal sin tomar demasiados desv??os. Si se suman todos los elementos coleccionables, misiones secundarias, h??roes opcionales, etc. sigue subiendo. Dicho esto, ??cu??l es la duraci??n de Xenoblade Chronicles 3 si se busca completar al 100%?</p>

            <p>La estimaci??n es compleja, ya que hay muchos factores que pueden alterar el recorrido, pero ser??an no menos de 120 horas de juego. Eso sin contar el contenido adicional que puedan ir sumando con el paso del tiempo mediante el pase de temporada.</p>

            <p class="link">Fuente: <a href="https://www.marca.com/videojuegos/2022/08/02/62e920d8ca47410f1c8b45f1.php" target="_blank" class="link-color">Marca</a></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <!-- <h3>Reviews</h3>  -->
          <img src="../../../assets/img/adds/pub7.jpg" class="img-fluid mb-4 mt-2" alt="Publicidad">
          <img src="../../../assets/img/adds/pub2.jpg" class="img-fluid mb-4" alt="Publicidad">
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