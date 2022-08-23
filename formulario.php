<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamesPortal - Contacto</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/style_contacto.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="/assets/favicons/favicon.ico" type="image/x-icon">
</head>

<body>

  <!-- Usuario: base de datos -->

    <?php
      session_start();
      if(!isset($_SESSION["Usuario"])){
        header("Location:../https://www.google.com");
      }
    ?>


  <!-- ------------------------------head--------------------------------------- -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">
          <img src="/assets/img/logo.png" alt="Logo" width="170" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item pr-3">
              <a class="nav-link light mypadding" aria-current="page" href="/index.html">Inicio</a>
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
              <a class="nav-link active mypadding" href="/pages/contacto.html">Contáctanos</a>
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
      <div class="row mymargen">
        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
          <h2 class="titulo mb-3"><i class="fa-solid fa-address-book icon"></i> Contáctanos</h2>
          <section>
            <form action="conexion.php" method="POST">
              <fieldset class="myfieldset mb-4">
                <div class="row form-row d-flex justify-content-center">
                  <span class="mb-2 tamanio">Nombres</span>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="FIRST_NAME" id="FIRST_NAME" class="form-control gris" maxlength="20" placeholder="Primer Nombre" autofocus>
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="MIDDLE_NAME" id="MIDDLE_NAME" class="form-control gris" maxlength="20" placeholder="Segundo Nombre">
                  </div>
                </div>
    
                <div class="row form-row d-flex justify-content-center">
                  <span class="mb-2 tamanio">Apellidos</span>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="FIRST_SURNAME" id="FIRST_SURNAME" class="form-control gris" maxlength="20" placeholder="Primer Apellido">
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="LAST_SURNAME" id="LAST_SURNAME" class="form-control gris" maxlength="20" placeholder="Segundo Apellido">
                  </div>
                </div>
    
                <div class="row form-row d-flex justify-content-center">
                  <span class="col-md-12 mb-2 tamanio">Documento de Identidad</span>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="TYPE_IC" id="TYPE_IC" class="form-control gris" maxlength="30" placeholder="Tipo de Documento">
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="IDENTITY_CARD" id="IDENTITY_CARD" class="form-control gris" maxlength="10" placeholder="Número de Documento">
                  </div>
                </div>
                
                <div class="row form-row d-flex justify-content-center">
                  <span class="mb-2 tamanio">Nivel Educativo</span>
                  <div class="col-sm-12 col-md-10 mb-3">
                    <input type="text" name="EDUCATION_LEVEL" id="EDUCATION_LEVEL" class="form-control gris"  maxlength="30" placeholder="Nivel Educativo">
                  </div>
                </div>
    
                <div class="row form-row d-flex justify-content-center">
                  <span class="mb-2 tamanio">Ubicación</span>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="COUNTRY" id="COUNTRY" class="form-control gris"  maxlength="50" placeholder="País">
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="CITY" id="CITY" class="form-control gris"  maxlength="25" placeholder="Ciudad">
                  </div>
                  <div class="col-sm-12 col-md-10 mb-3">
                    <input type="text" name="ADDRESS" id="ADDRESS" class="form-control gris"  maxlength="40" placeholder="Dirección">
                  </div>
                </div>
    
                <div class="row form-row d-flex justify-content-center mb-4">
                  <span class="mb-2 tamanio">Datos de Contacto</span>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="PHONE" id="PHONE" class="form-control gris"  maxlength="20" placeholder="Celular">
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <input type="text" name="EMAIL" id="EMAIL" class="form-control gris"  maxlength="60" placeholder="E-mail">
                  </div>
                </div>
    
                <div class="d-grid gap-2 w d-flex justify-content-center mb-3"> 
                  <button type="reset" class="btn btn-secondary btn-formulario">Limpiar</button>
                  <button type="submit" class="btn btn-primary btn-formulario">Enviar</button>
                </div>
              </fieldset>
            </form>
          </section>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <!-- <h3>Reviews</h3>  -->
        </div>
      </div>
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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
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