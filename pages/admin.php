<?php 
    include '../php/conexion.php';

    session_start();

    error_reporting(0);

    if(!isset($_SESSION['username'])){
      header("Location: login.php");
    }

    if($_SESSION['username']!='admin'){
        header("Location: perfil.php");
    }

    $ur = false;
    $w = false;
    $us = false;
    $e = false;
    $pm = false;

    if($_SESSION['ur'] == true){
      $ur = true;
    }

    if($_SESSION['w'] == true){
      $w = true;
    }

    if($_SESSION['us'] == true){
      $us = true;
    }

    if($_SESSION['e'] == true){
      $e = true;
    }

    if($_SESSION['pm'] == true){
      $pm = true;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <base href="web-jaime_jaramillo-xampp">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Admin</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style_admin.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item pr-3">
              <a class="nav-link mypadding" aria-current="page" href="../index.php">Inicio</a>
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
            <li class="nav-item">
              <a class="nav-link light mypadding" href="contacto.php">Cont??ctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding" href="shop.php">Tienda</a>
            </li>
          </ul> 

          <li class="nav-item dropdown perfil-1">
            <a class="nav-text dropdown-toggle btn btn-success perfil-2 m1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark mycolor">
              <li><a class="dropdown-item" href="admin.php">Administrador</a></li>
              <li><a class="dropdown-item" href="perfil.php">Ver Perfil</a></li>
              <li><a class="dropdown-item" href="../php/logout.php">Cerrar Sesi??n</a></li>
              <li><a class="dropdown-item" href="../php/eliminar.php">Eliminar Cuenta</a></li>
            </ul>
          </li>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- ------------------------------main--------------------------------------- -->
  <main>

    <!-- ----------------------------------------------------------Noticias--------------------------------------------------- -->

    <div class="container pt-3 pb-2 container-principal">
      <div class="mymargen">
        <h2 class="titulo mb-3 text-center"><i class="fa-solid fa-screwdriver-wrench"></i> Administrador</h2>
      </div>

      <div>
        <ul class="nav nav-tabs justify-content-center" id="myTab">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">Registrar Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin..php">Lista de Usuarios</a>
          </li>
        </ul>
      </div>

        <section class="myfieldset2">
          <div class="row">
            <div class="otropadd">
              <form name="datos-formulario-signup" action="../php/validar_register.php" method="POST">
                <fieldset class="myfieldset-1 mb-4">
                  <div class="row form-row d-flex justify-content-center">
                    <label for="USERNAME" class="mb-2 mt-2 tamanio">Nombre de Usuario (<span class="rojo">*</span>)</label>
                    <div class="col-sm-12 col-md-10 mb-3">
                      <input type="text" name="username" id="USERNAME" class="form-control gris" minlength="3" maxlength="30" placeholder="Username" value="<?php echo $username; ?>" autofocus required>
                    </div>
                  </div>

                  <div class="row form-row d-flex justify-content-center">
                    <label for="EMAIL" class="mb-2 tamanio">Email (<span class="rojo">*</span>)</label>
                    <div class="col-sm-12 col-md-10 mb-3">
                      <input type="email" name="email" id="EMAIL" class="form-control gris"  maxlength="100" placeholder="Email" value="<?php echo $email; ?>" required>
                    </div>
                  </div>

                  <div class="row form-row d-flex justify-content-center">
                    <label for="PASSWORD" class="mb-2 tamanio">Contrase??a (<span class="rojo">*</span>)</label>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="password" name="password" id="PASSWORD" class="form-control gris" minlength="8" maxlength="50" placeholder="Contrase??a" required>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="password" name="cpassword" id="CPASSWORD" class="form-control gris" minlength="8" maxlength="50" placeholder="Verificar Contrase??a" required>
                    </div>
                  </div>

                  <div class="row form-row d-flex justify-content-center">
                    <label for="NEWS" class="mb-2 tamanio">Interesad@ en noticias de...</label>
                    <div class="col-sm-12 col-md-10 mb-2">
                      <select name="news" id="NEWS" class="form-select mb-4 mt-2 gris">
                        <option value="Ninguna" selected class="tg">Ninguna</option>
                        <option value="PC">PC</option>
                        <option value="Xbox">Xbox</option>
                        <option value="play Station">Play Station</option>
                        <option value="Nintendo">Nintendo</option>
                      </select>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="myfieldset-2 mb-4">
                  <div class="row form-row d-flex justify-content-center">
                    <label for="FIRST_NAME" class="mb-2 mt-3 tamanio">Nombres</label>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="first_name" id="FIRST_NAME" class="form-control gris" maxlength="50" placeholder="Primer Nombre" required>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="middle_name" id="MIDDLE_NAME" class="form-control gris" maxlength="50" placeholder="Segundo Nombre" required>
                    </div>
                  </div>
            
                  <div class="row form-row d-flex justify-content-center">
                    <label for="FIRST_SURNAME" class="mb-2 tamanio">Apellidos</label>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="first_surname" id="FIRST_SURNAME" class="form-control gris" maxlength="50" placeholder="Primer Apellido" required>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="last_surname" id="LAST_SURNAME" class="form-control gris" maxlength="50" placeholder="Segundo Apellido" required>
                    </div>
                  </div>
            
                  <div class="row form-row d-flex justify-content-center">
                    <label for="TYPE_IC" class="col-md-12 mb-2 tamanio">Documento de Identidad</label>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <select name="type_ic" id="TYPE_IC" class="form-select gris">
                        <option value="C??dula" selected class="tg">C??dula</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="identitycard" id="IDENTITY_CARD" class="form-control gris" maxlength="15" placeholder="N??mero de Documento" required>
                    </div>
                  </div>
                      
                  <div class="row form-row d-flex justify-content-center">
                    <label for="EDUCATION_LEVEL" class="mb-2 tamanio">Nivel Educativo</label>
                    <div class="col-sm-12 col-md-10 mb-3">
                      <select name="education_level" id="EDUCATION_LEVEL" class="form-select gris">
                        <option value="Desconocido" selected class="tg">No decir</option>
                        <optgroup label="Educaci??n B??sica">
                          <option value="Preescolar">Preescolar</option>
                          <option value="Priamria">B??sica Primaria</option>
                          <option value="Secundaria">B??sica Secundaria</option>
                          <option value="Media">Educaci??n Media (Bachillerato)</option>
                        </optgroup>
                        <optgroup label="Pregrago">
                          <option value="T??cnico">T??cnico Profesional</option>
                          <option value="Tecnolog??a">Tecnolog??a</option>
                          <option value="Profesional">Profesional</option>
                        </optgroup>
                        <optgroup label="Posgrado">
                          <option value="Especializaci??n">Especializaci??n</option>
                          <option value="Maestr??a">Maestr??a</option>
                          <option value="Doctorado">Doctorado</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
          
                  <div class="row form-row d-flex justify-content-center">
                    <label for="COUNTRY" class="mb-2 tamanio">Ubicaci??n</label>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="country" id="COUNTRY" class="form-control gris"  maxlength="50" placeholder="Pa??s" required>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-3">
                      <input type="text" name="city" id="CITY" class="form-control gris"  maxlength="50" placeholder="Ciudad" required>
                    </div>
                    <div class="col-sm-12 col-md-10 mb-3">
                      <input type="text" name="address" id="ADDRESS" class="form-control gris"  maxlength="100" placeholder="Direcci??n" required>
                    </div>
                  </div>
            
                  <div class="row form-row d-flex justify-content-center">
                  <label for="PHONE" class="mb-2 tamanio">Datos de Contacto</label>
                  <div class="col-sm-12 col-md-10 mb-3">
                    <input type="text" name="phone" id="PHONE" class="form-control gris"  maxlength="30" placeholder="N??mero de Celular" required>
                  </div>
                </div>

                <div class="row form-row d-flex justify-content-center mb-3">
                  <label for="TYPE_CL" class="col-md-12 mb-2 tamanio">Tipo Cliente y Plazo de Pago</label>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <select name="type_cl" id="TYPE_CL" class="form-select gris">
                      <option value="Regular" selected class="tg">Regular</option>
                      <option value="VIP">VIP</option>
                    </select>
                  </div>
                  <div class="col-sm-12 col-md-5 mb-3">
                    <select name="payment" id="PAYMENT" class="form-select gris">
                      <option value="1" selected class="tg">1 Mes</option>
                      <option value="2">2 Meses</option>
                      <option value="3">3 Meses</option>
                      <option value="4">4 Meses</option>
                      <option value="5">5 Meses</option>
                    </select>
                  </div>
                </div>
          
                </fieldset>
                <div class="d-grid gap-2 d-md-block mb-3 text-center"> 
                  <button type="reset" class="btn btn-secondary btn-formulario">Limpiar</button>
                  <button onclick=alerta() name="submit" class="btn btn-primary btn-formulario">Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </section>

      <?php
        if ($w == true){ ?>
          <script>swal('Oops..','Something went wrong.','error');</script> 
        <?php }
        else if($ur == true){ ?>
          <script>swal('Great!','User Created .','success');</script> 
        <?php } 
        else if ($pm == true){ ?>
          <script>swal('Woops!','Password Not Matched.','error');</script> 
        <?php }
        else if($us == true && $e == true){ ?>
          <script>swal('Woops!','Username Already Exists and Email Already in Use.','error');</script> 
        <?php } 
        else if($us == true && $e == false){ ?>
          <script>swal('Woops!','Username Already Exists.','error');</script> 
        <?php } 
        else if ($e == true && $us == false){ ?>
          <script>swal('Woops!','Email Already in Use.','error');</script> 
        <?php } 
        else {}
        $_SESSION['ur'] = false;
        $_SESSION['w'] = false;
        $_SESSION['us'] = false;
        $_SESSION['e'] = false;
        $_SESSION['pm'] = false;
      ?>
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
              <a href="contacto.php" class="btn btn-outline-light mb-4">Cont??ctanos</a>
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
  <script src="../js/button-up.js"></script>
</body>

</html>