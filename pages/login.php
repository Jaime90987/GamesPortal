<?php
    include '../php/conexion.php';
    
    session_start();

    error_reporting(0);

    if(isset($_SESSION['username'])){
      header("Location: ../index.php");
    }

    $u = false;
    $p = false;
    $n = false;

    if($_SESSION['u'] == true){
      $u = true;
    }

    if($_SESSION['p'] == true){
      $p = true;
    }

    if($_SESSION['n'] == true){
      $n = true;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <base href="web-jaime_jaramillo-xampp">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Login</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style_login.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="../assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
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
        <a class="navbar-brand" href="../index.php">
          <img src="../assets/img/logo.png" alt="Logo" width="170" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav  me-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item pr-3">
              <a class="nav-link light mypadding" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mypadding" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Noticias</a>
              <ul class="dropdown-menu dropdown-menu-dark mycolor">
                <li><a class="dropdown-item" href="pc.php">PC</a></li>
                <li><a class="dropdown-item" href="xbox.php">Xbox</a></li>
                <li><a class="dropdown-item" href="ps.php">Play Station</a></li>
                <li><a class="dropdown-item" href="nintendo.php">Nintendo</a></li>
              </ul>
            </li>
            <li class="nav-item light">
              <a class="nav-link mypadding" href="contacto.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="shop.php">Tienda</a>
            </li>
          </ul>
          <a href="login.php" class="navbar-text btn btn-success m1">
            Login
          </a>
          <a href="signup.php" class="navbar-text btn btn-light m2">
            Sign Up
          </a>
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
            <form name="datos-formulario-login" action="../php/validar_login.php" method="POST">
              <fieldset class="myfieldset">
                <div class="row form-row">
                  <span class="mb-2 mt-2"><i class="fa-solid fa-user-large"></i> Usuario</span>
                  <div class="mb-2">
                    <input type="text" name="username" id="USER" class="form-control gris" maxlength="30" placeholder="User" autofocus required value="<?php echo $_SESSION['user']; ?>">
                  </div>
                </div>
    
                <div class="row form-row mb-2 mt-2">
                  <span class="mb-2"><i class="fa-solid fa-key"></i> Contraseña</span>
                  <div class="mb-2">
                    <input type="password" name="password" id="PASSWORD" class="form-control gris"  maxlength="50" placeholder="Password" required>
                  </div>
                </div>

                <span><i class="fa-solid fa-thumbs-up"></i> Interesad@ en noticias de...</span>
                <select name="news" id="NEWS" class="form-select mb-4 mt-2 gris">
                  <option value="Ninguna" selected class="tg">Ninguna</option>
                  <option value="PC">PC</option>
                  <option value="Xbox">Xbox</option>
                  <option value="Play Station">Play Station</option>
                  <option value="Nintendo">Nintendo</option>
                </select>

                <div class="d-grid gap-2 centrar"> 
                  <input type="submit" name="submit" id="ingresar" value="Ingresar" class="btn btn-primary mb-3 boton2">
                  <p class="text-center mb-1">¿Aún no tienes una cuenta?</p>
                  <!-- <a onclick=alerta() name="register" class="btn btn-secondary mb-2 boton2">Registrarse</a> -->
                  <a href="signup.php" class="btn btn-secondary mb-2 boton2">Registrarse</a>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </section>
    </div>

    <?php
      if($u == true){ ?>
        <script>swal('Woops!','User doesn\’t exist.','error');</script> 
      <?php } 
      else if($p == true && $n == true){ ?>
        <script>swal('Woops!','Pasword and News Preference are wrong.','error');</script> 
      <?php } 
      else if ($p == true && $n == false){ ?>
        <script>swal('Woops!','Password is wrong.','error');</script> 
      <?php } 
      else if ($n == true && $p == false){ ?>
        <script>swal('Woops!','News Preference is wrong.','error');</script> 
      <?php }
      else {}
      $_SESSION['u'] = false;
      $_SESSION['p'] = false;
      $_SESSION['n'] = false;
    ?>

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
              <a href="contacto.php" class="btn btn-outline-light mb-4">Contáctanos</a>
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
      <a class="text-white" href="https://mdbootstrap.com/" target="_blanck" target="_blanck">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="../js/button-up.js"></script>
  <!-- <script>
    function alerta(){
      swal('Ups!','To get an account you must contact the administrator','info');
    }
  </script> -->
</body>

</html>