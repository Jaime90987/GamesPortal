<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamesPortal - Login php 2</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/style_login.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="/assets/favicons/favicon.ico" type="image/x-icon">
</head>

<body>
  <!-- ------------------------------head--------------------------------------- -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index2.html">
          <img src="/assets/img/logo.png" alt="Logo" width="170" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item pr-3">
              <a class="nav-link light mypadding" aria-current="page" href="/index2.html">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mypadding" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Noticias</a>
              <ul class="dropdown-menu dropdown-menu-dark mycolor">
                <li><a class="dropdown-item" href="/pages/pc.html">PC</a></li>
                <li><a class="dropdown-item" href="/pages/xbox.html">Xbox</a></li>
                <li><a class="dropdown-item" href="/pages/ps.html">Play Station</a></li>
                <li><a class="dropdown-item" href="/pages/nintendo.html">Nintendo</a></li>
              </ul>
            </li>
            <li class="nav-item light">
              <a class="nav-link mypadding" href="/pages/contacto.html">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- ------------------------------main--------------------------------------- -->
  <main>

    <!-- ----------------------------------------------------------Noticias--------------------------------------------------- -->
    <div class="container pt-3 pb-2 container-principal">
      <div class="mymargen">
        <h2 class="titulo mb-4"><i class="fa-solid fa-right-to-bracket"></i> Login</h2>
      </div>

      <section class="">
        <div class="row">
          <div class="otropadd mb-5">
            <form name="datos-formulario-login" action="" method="POST">
              <fieldset class="myfieldset">
                <div class="row form-row">
                  <span class="mb-2 mt-2"><i class="fa-solid fa-user-large"></i> Usuario</span>
                  <div class="mb-2">
                    <input type="text" name="USER" id="USER" class="form-control gris" maxlength="20" placeholder="User" autofocus required>
                  </div>
                </div>
    
                <div class="row form-row mb-2 mt-2">
                  <span class="mb-2"><i class="fa-solid fa-key"></i> Contraseña</span>
                  <div class="mb-2">
                    <input type="password" name="PASSWORD" id="PASSWORD" class="form-control gris"  maxlength="20" placeholder="Password" required>
                  </div>
                </div>

                <span><i class="fa-solid fa-thumbs-up"></i> Interesad@ en</span>
                <select name="NEWS" id="NEWS" class="form-select mb-4 mt-2 gris">
                  <option value="0" selected class="tg">Noticias de...</option>
                  <option value="1">PC</option>
                  <option value="2">Xbox</option>
                  <option value="3">Play Station</option>
                  <option value="4">Nintendo</option>
                </select>

                <div class="d-grid gap-2 centrar"> 
                  <input type="submit" value="Login" class="btn btn-primary mb-3 boton2">
                  <p class="text-center mb-1">¿Aún no tienes una cuenta?</p>
                  <a href="/pages/signup.html" class="btn btn-secondary mb-2 boton2">Registrarse</a>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </section>
    </div>
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
              <a href="/pages/contacto.html" class="btn btn-outline-light mb-4">Contáctanos</a>
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
</body>

</html>