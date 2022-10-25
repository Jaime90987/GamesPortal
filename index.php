<?php 
    session_start();

    // if(!isset($_SESSION['username'])){
    //   header("Location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <base href="web-jaime_jaramillo-xampp">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Inicio</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
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
        <a class="navbar-brand" href="index.php">
          <img src="assets/img/logo.png" alt="Logo" width="170" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item pr-3">
              <a class="nav-link active light mypadding" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mypadding" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Noticias</a>
              <ul class="dropdown-menu dropdown-menu-dark mycolor">
                <li><a class="dropdown-item" href="pages/pc.php">PC</a></li>
                <li><a class="dropdown-item" href="pages/xbox.php">Xbox</a></li>
                <li><a class="dropdown-item" href="pages/ps.php">Play Station</a></li>
                <li><a class="dropdown-item" href="pages/nintendo.php">Nintendo</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="pages/contacto.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="pages/shop.php">Tienda</a>
            </li>
          </ul>

          <?php 
            if(empty($_SESSION['username'])==true){ ?>
                <a href="pages/login.php" class="navbar-text btn btn-success m1 m3">
                  Login
                </a>
                <a href="pages/signup.php" class="navbar-text btn btn-light m2">
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
                        <li><a class="dropdown-item" href="pages/admin.php">Administrador</a></li>
                      <?php }
                  ?>
                  <li><a class="dropdown-item" href="pages/perfil.php">Ver Perfil</a></li>
                  <li><a class="dropdown-item" href="php/logout.php">Cerrar Sesión</a></li>
                  <li><a class="dropdown-item" href="php/eliminar.php">Eliminar Cuenta</a></li>
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
    <div id="carrusel" class="carousel slide carousel-fade carrusel" data-bs-ride="carousel" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <picture>
            <source media="(min-width: 578px)" srcset="assets/img/slide-1.jpg">
            <source media="(max-width: 577px)" srcset="assets/img/slide_mobile-1.jpg">
            <img src="assets/img/slide-1.jpg" class="d-block w-100" alt="slide1">
          </picture>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <picture>
            <source media="(min-width: 578px)" srcset="assets/img/slide-2.jpg">
            <source media="(max-width: 577px)" srcset="assets/img/slide_mobile-2.jpg">
            <img src="assets/img/slide-2.jpg" class="d-block w-100" alt="slide2">
          </picture>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <picture>
            <source media="(min-width: 578px)" srcset="assets/img/slide-3.jpg">
            <source media="(max-width: 577px)" srcset="assets/img/slide_mobile-3.jpg">
            <img src="assets/img/slide-3.jpg" class="d-block w-100" alt="slide3">
          </picture>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <picture>
            <source media="(min-width: 578px)" srcset="assets/img/slide-4.jpg">
            <source media="(max-width: 577px)" srcset="assets/img/slide_mobile-4.jpg">
            <img src="assets/img/slide-4.jpg" class="d-block w-100" alt="slide4">
          </picture>
        </div>
      </div>
    </div>
    <!-- --------------------------------------------Cartas------------------------------------------------------------ -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card cartas mi-overflow" style="width: 20rem;">
            <div id="carrusel1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators altura">
                <button type="button" data-bs-target="#carrusel1" data-bs-slide-to="0" class="active linea-margen" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" class="linea-margen" data-bs-target="#carrusel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" class="linea-margen" data-bs-target="#carrusel1" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
              </div>
              <div class="carousel-inner carrusel-item">
                <div class="carousel-item active carrusel-item" data-bs-interval="10000">
                  <img src="assets/img/noticia1/Mordhau-360x203.webp" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/xbox/noticia1.php">
                        Así es Mordhau, el nuevo slasher medieval multijugador que llegará muy pronto a Xbox.
                      </a>
                    </p>
                  </div>
                </div>
                <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/noticia2/kena1366_2000.webp" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/pc/noticia2.php">
                        Kena: Bridge of Spirits celebrará su primer aniversario con su llegada a Steam.
                      </a>
                    </p>
                  </div>
                </div>
                <!-- <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/page5-img1.jpg" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p  class="fondo-texto"></p>
                  </div>
                </div> -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carrusel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carrusel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card cartas mi-overflow" style="width: 20rem;">
            <div id="carrusel2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators altura">
                <button type="button" data-bs-target="#carrusel2" data-bs-slide-to="0" class="active linea-margen" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" class="linea-margen" data-bs-target="#carrusel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" class="linea-margen" data-bs-target="#carrusel2" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
              </div>
              <div class="carousel-inner carrusel-item">
                <div class="carousel-item active carrusel-item" data-bs-interval="10000">
                  <img src="assets/img/noticia1/gow2022816102277_1.jpg.webp" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/play-station/noticia1.php">
                        God of War Ragnarok: Se filtra un arte que nos deja ver el sorprendente aspecto de Odín.
                      </a>
                    </p>
                  </div>
                </div>
                <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/noticia2/hori-Split-Pad-Fit-Cropped.webp" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/nintendo/noticia2.php">
                        Xenoblade Chronicles 3: ¿Cuánto dura el nuevo exclusivo de Nintendo Switch?
                      </a>
                    </p>
                  </div>
                </div>
                <!-- <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/page4-img2.jpg" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p  class="fondo-texto"></p>
                  </div>
                </div> -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carrusel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carrusel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card cartas mi-overflow" style="width: 20rem;">
            <div id="carrusel3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators altura">
                <button type="button" data-bs-target="#carrusel3" data-bs-slide-to="0" class="active linea-margen" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" class="linea-margen" data-bs-target="#carrusel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" class="linea-margen" data-bs-target="#carrusel3" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
              </div>
              <div class="carousel-inner carrusel-item">
                <div class="carousel-item active carrusel-item" data-bs-interval="10000">
                  <img src="assets/img/noticia1/sp-e1654266613367.jpg" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/pc/noticia1.php">
                        Marvel’s Spiderman Remastered y Cult of the Lamb, los dos nuevos juegos de Steam que son furor.
                      </a>
                    </p>
                  </div>
                </div>
                <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/noticia2/plst2022816108511_2.jpg" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p class="fondo-texto">
                      <a href="pages/news/play-station/noticia2.php">
                        Sony y el estudio Ballistic Moon colaboran en un juego desarrolado con Unreal Engine 5.
                      </a>
                    </p>
                  </div>
                </div>
                <!-- <div class="carousel-item carrusel-item" data-bs-interval="8000">
                  <img src="assets/img/page4-img5.jpg" class="d-block w-100 mi-overflow opacidad" alt="...">
                  <div class="carousel-caption d-md-block sin-padding">
                    <p  class="fondo-texto"></p>
                  </div>
                </div> -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carrusel3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carrusel3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------------------------------------------------------Noticias--------------------------------------------------- -->
    <div class="container pt-3 pb-2 container-principal">
      <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
          <h2 class="titulo"><i class="fa-solid fa-newspaper icon"></i> Últimas Noticias</h2>
          <article class="carta">
            <a href="pages/news/xbox/noticia3.php" class="carta__thumbnail">
              <img src="assets/img/noticia3/xbox202282417415128_1.jpg" alt="Imagen de Mordhau" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/xbox/noticia3.php" class="carta__link-title">El jefe de Xbox espera que cada vez haya menos juegos exclusivos.</a></b>
              </h3>
              <a href="pages/xbox.php" class="btn btn-sm mb-2 boton-xbox">Xbox</a>
              <p class="carta__texto">Phil Spencer, máximo responsable de Xbox, espera que con el tiempo se apueste más por los juegos multiplataforma en las diferentes consolas.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>26 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/xbox/noticia3.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/play-station/noticia3.php" class="carta__thumbnail">
              <img src="assets/img/noticia3/hogwarts-legacy-image.webp" alt="Imagen de Paisaje" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/play-station/noticia3.php" class="carta__link-title">Hogwarts Legacy contará con una misión exclusiva para consolas PlayStation.</a></b>
              </h3>
              <a href="pages/ps.php" class="btn btn-sm mb-2 boton-ps">PS</a>
              <p class="carta__texto">Chandler Wood, responsable de comunidad de Avalanche Studios, confirma que el juego base del RPG ambientado en el universo de Harry Potter tendrá una misión exclusiva para consolas PlayStation.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>26 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/play-station/noticia3.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/pc/noticia3.php" class="carta__thumbnail">
              <img src="assets/img/noticia3/Skull-Bones-Deep-Dive.webp" alt="Imagen de SP" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/pc/noticia3.php" class="carta__link-title">Skull and Bones muestra sus requisitos para PC y detalla las características que incluirá de lanzamiento.</a></b>
              </h3>
              <a href="pages/pc.php" class="btn btn-sm mb-2 boton-pc">PC</a>
              <p class="carta__texto">A medida que se acerca el lanzamiento del juego, Ubisoft ha confirmado tanto las características más destacadas como los requisitos para la versión de PC de Skull and Bones.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>26 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/pc/noticia3.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/nintendo/noticia3.php" class="carta__thumbnail">
              <img src="assets/img/noticia3/nin1366_2000.webp" alt="Imagen de x" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/nintendo/noticia3.php" class="carta__link-title">La demo de Splatoon 3 ya se puede descargar gratis.</a></b>
              </h3>
              <a href="pages/nintendo.php" class="btn btn-sm mb-2 boton-nintendo">Nintendo</a>
              <p class="carta__texto">Este fin de semana tendrá lugar el Splatfest World Premiere, también conocida como la demo gratuita de Splatoon 3 para que cualquiera pueda probar un adelanto de esta nueva entrega de la saga que llegará el mes que viene.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime  Jaramillo Pérez - </small>
                <small>26 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/nintendo/noticia3.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/xbox/noticia2.php" class="carta__thumbnail">
              <img src="assets/img/noticia2/ds-790x444.webp" alt="Imagen de Mordhau" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/xbox/noticia2.php" class="carta__link-title">Así es el nuevo tráiler de Death Stranding que celebra su llegada a PC Game Pass.</a></b>
              </h3>
              <a href="pages/xbox.php" class="btn btn-sm mb-2 boton-xbox">Xbox</a>
              <p class="carta__texto">Los rumores y diversas pistas que nos estaban dejando bastante claro que Death Stranding llegaría al exitoso servicio de suscripción de Microsoft se han hecho realidad.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>20 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/xbox/noticia2.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/play-station/noticia2.php" class="carta__thumbnail">
              <img src="assets/img/noticia2/plst2022816108511_3.jpg" alt="Imagen de Paisaje" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/play-station/noticia2.php" class="carta__link-title">Sony y el estudio Ballistic Moon colaboran en un juego con Unreal Engine 5.</a></b>
              </h3>
              <a href="pages/ps.php" class="btn btn-sm mb-2 boton-ps">PS</a>
              <p class="carta__texto">La compañía británica Ballistic Moon, fundada por desarrolladores de Until Dawn y Heavy Rain, está trabajando en un título que publicará Sony Interactive Entertainment.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>20 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/play-station/noticia2.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/pc/noticia2.php" class="carta__thumbnail">
              <img src="assets/img/noticia2/kena1366_2000.webp" alt="Imagen de SP" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/pc/noticia2.php" class="carta__link-title">Kena: Bridge of Spirits celebrará su primer aniversario con su llegada a Steam y una gran actualización repleta de novedades.</a></b>
              </h3>
              <a href="pages/pc.php" class="btn btn-sm mb-2 boton-pc">PC</a>
              <p class="carta__texto">El 27 de septiembre Ember Lab nos dejará con dos novedades muy importantes relacionadas con Kena: Bridge of Spirits, comenzando por el lanzamiento de su versión de Steam.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime Jaramillo Pérez - </small>
                <small>20 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/pc/noticia2.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
          <hr>
          <article class="carta">
            <a href="pages/news/nintendo/noticia2.php" class="carta__thumbnail">
              <img src="assets/img/noticia2/hori-Split-Pad-Fit-Cropped.webp" alt="Imagen de x" class="carta__image img-fluid">
            </a>
            <div class="carta__info blog-meta big-meta col-md-8">
              <h3 class="carta__title">
                <b><a href="pages/news/nintendo/noticia2.php" class="carta__link-title">Anunciado oficialmente el Split Pad Fit, un nuevo mando de HORI para Nintendo Switch.</a></b>
              </h3>
              <a href="pages/nintendo.php" class="btn btn-sm mb-2 boton-nintendo">Nintendo</a>
              <p class="carta__texto">HORI continúa lanzando nuevos productos con licencia oficial para Nintendo Switch. Hoy nos ha informado sobre el anuncio de un nuevo mando oficial de HORI sin duda interesante.</p>
              <p class="carta__text_small">
                <small><i class="fa-solid fa-comments"></i> 9 - </small>
                <small>Jaime  Jaramillo Pérez - </small>
                <small>20 Agosto, 2022</small>
              </p>
            </div>
            <a href="pages/news/nintendo/noticia2.php" class="boton boton--more">
              <span class="boton__text">Leer más...</span>
              <i class="boton__icon fas fa-arrow-right"></i>
            </a>
          </article>
        <hr>
        <article class="carta">
          <a href="pages/news/xbox/noticia1.php" class="carta__thumbnail">
            <img src="assets/img/noticia1/Mordhau-360x203.webp" alt="Imagen de Paisaje" class="carta__image img-fluid">
          </a>
          <div class="carta__info blog-meta big-meta col-md-8">
            <h3 class="carta__title">
              <b><a href="pages/news/xbox/noticia1.php" class="carta__link-title">Así es Mordhau, el nuevo slasher medieval multijugador que llegará muy pronto a Xbox.</a></b>
            </h3>
            <a href="pages/xbox.php" class="btn btn-sm mb-2 boton-xbox">Xbox</a>
            <p class="carta__texto">A través de un épico tráiler en YouTube, el desarrollador Triternion ha compartido lo que será el título medieval multijugador en consolas, con imágenes realmente atractivas que no hacen más que incentivar poder dar golpes con las espadas a los enemigos.</p>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo Pérez - </small>
              <small>15 Agosto, 2022</small>
            </p>
          </div>
          <a href="pages/news/xbox/noticia1.php" class="boton boton--more">
            <span class="boton__text">Leer más...</span>
            <i class="boton__icon fas fa-arrow-right"></i>
          </a>
        </article>
        <hr>
        <article class="carta">
          <a href="pages/news/play-station/noticia1.php" class="carta__thumbnail">
            <img src="assets/img/noticia1/gow2022816102277_1.jpg.webp" alt="Imagen de Paisaje" class="carta__image img-fluid">
          </a>
          <div class="carta__info blog-meta big-meta col-md-8">
            <h3 class="carta__title">
              <b><a href="pages/news/play-station/noticia1.php" class="carta__link-title">God of War Ragnarok: Se filtra un arte que nos deja ver el sorprendente aspecto de Odín.</a></b>
            </h3>
            <a href="pages/ps.php" class="btn btn-sm mb-2 boton-ps">PS</a>
            <p class="carta__texto">El popular insider Dusk Golem ha revelado un primer vistazo del aspecto del dios nórdico en un arte conceptual filtrado de Ragnarok, el nuevo título de Santa Monica que llegará el 9 de noviembre.</p>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo Pérez - </small>
              <small>15 Agosto, 2022</small>
            </p>
          </div>
          <a href="pages/news/play-station/noticia1.php" class="boton boton--more">
            <span class="boton__text">Leer más...</span>
            <i class="boton__icon fas fa-arrow-right"></i>
          </a>
        </article>
        <hr>
        <article class="carta">
          <a href="pages/news/pc/noticia1.php" class="carta__thumbnail">
            <img src="assets/img/noticia1/sp-e1654266613367.jpg" alt="Imagen de SP" class="carta__image img-fluid">
          </a>
          <div class="carta__info blog-meta big-meta col-md-8">
            <h3 class="carta__title">
              <b><a href="pages/news/pc/noticia1.php" class="carta__link-title">Marvel’s Spiderman Remastered y Cult of the Lamb, los dos nuevos juegos de Steam que son furor.</a></b>
            </h3>
            <a href="pages/pc.php" class="btn btn-sm mb-2 boton-pc">PC</a>
            <p class="carta__texto">Últimamente Steam atraviesa una época de grandes lanzamientos, no solo por Stray, sino también por juegos como Marvel’s Spiderman Remastered o Cult of the Lamb.</p>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime Jaramillo Pérez - </small>
              <small>15 Agosto, 2022</small>
            </p>
          </div>
          <a href="pages/news/pc/noticia1.php" class="boton boton--more">
            <span class="boton__text">Leer más...</span>
            <i class="boton__icon fas fa-arrow-right"></i>
          </a>
        </article>
        <hr>
        <article class="carta">
          <a href="pages/news/nintendo/noticia1.php" class="carta__thumbnail">
            <img src="assets/img/noticia1/cx4b59571b825f3a-1200x801.webp" alt="Imagen de  X" class="carta__image img-fluid">
          </a>
          <div class="carta__info blog-meta big-meta col-md-8">
            <h3 class="carta__title">
              <b><a href="pages/news/nintendo/noticia1.php" class="carta__link-title">Xenoblade Chronicles 3: ¿Cuánto dura el nuevo exclusivo de Nintendo Switch?</a></b>
            </h3>
            <a href="pages/nintendo.php" class="btn btn-sm mb-2 boton-nintendo">Nintendo</a>
            <p class="carta__texto">Xenoblade Chronicles 3 acaba de aterrizar en la consola híbrida de la gran N, pero ya se ha coronado como uno de los títulos más destacados del verano el cual promete decenas de horas de diversión</p>
            <p class="carta__text_small">
              <small><i class="fa-solid fa-comments"></i> 9 - </small>
              <small>Jaime  Jaramillo Pérez - </small>
              <small>15 Agosto, 2022</small>
            </p>
          </div>
          <a href="pages/news/nintendo/noticia1.php" class="boton boton--more">
            <span class="boton__text">Leer más...</span>
            <i class="boton__icon fas fa-arrow-right"></i>
          </a>
        </article>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="index.php">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="index.php">1</a></li>
            <li class="page-item"><a class="page-link" href="index.php">2</a></li>
            <li class="page-item"><a class="page-link" href="index.php">3</a></li>
            <li class="page-item">
              <a class="page-link" href="index.php">Siguiente</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <!-- <h3>Reviews</h3>  -->
        <img src="assets/img/adds/pub1.jpg" class="img-fluid mt-2 mb-4" alt="Publicidad">
        <img src="assets/img/adds/pub5.jpg" class="img-fluid mb-4" alt="Publicidad">
        <img src="assets/img/adds/pub6.jpg" class="img-fluid mb-4" alt="Publicidad">
        <img src="assets/img/adds/pub2.jpg" class="img-fluid mb-4" alt="Publicidad">
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
              <a href="pages/contacto.php" class="btn btn-outline-light mb-4">Contáctanos</a>
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
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="js/button-up.js"></script>
</body>

</html>