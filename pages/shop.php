<?php 

  require '../php/config.php';
  require '../php/conexion.php';
  require_once '../vendor/autoload.php';
  MercadoPago\SDK::setAccessToken('TEST-4362180245266717-092011-62c897f4b46bc3df37b18f6277328cbd-1199484650');

  $query = "SELECT * FROM products WHERE estado=1";
  $res = mysqli_query($conn, $query);      

  if(!$res) {
    echo "<script>alert('Error en la operación.')</script>";
  }

  //session_destroy();

  print_r($_SESSION);

?>

<?php

  $n = 1;

  foreach($res as $row){
    ${"preference".$n} = new MercadoPago\Preference();

    $item1 = new MercadoPago\Item();
    $item1->id = $row['id'];
    $item1->title = $row['nombre_largo'];
    $item1->quantity = 1;
    $item1->unit_price = $row['precio'];
    $item1->currency_id = "COP";

    ${"preference".$n}->items = array($item1);

    ${"preference".$n}->back_urls = array(
      "success" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php", 
      "failure" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php"
    );
                            
    ${"preference".$n}->auto_return = "approved";
    ${"preference".$n}->binary_mode = true;
                            
    ${"preference".$n}->save();  

    $n++;
  }   
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <title>GamesPortal - Shop</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style_shop.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
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
  <!-- SDK MercadoPago.js V2 -->
  <script src="https://sdk.mercadopago.com/js/v2"></script>

</head>
<body>
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
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
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
            <li class="nav-item">
              <a class="nav-link mypadding" href="contacto.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mypadding light active" href="shop.php">Tienda</a>
            </li>
          </ul>
          
          <?php 
            //if(empty($_SESSION['username'])==true){ ?>
                <a href="checkout.php" class="m1 m3 carrito__alineacion">
                  <i class="fa-solid fa-cart-shopping fa-lg"></i>
                  <span id="num_cart" class="badge bg-secondary carrito__numero"><?php echo $num_cart; ?></span>
                </a>
                <a href="login.php" class="navbar-text btn btn-success m1 m3">
                  Login
                </a>
                <a href="signup.php" class="navbar-text btn btn-light m2">
                  Sign Up
                </a>
            <?php //} ?>  

            <!-- ?php// if(empty($_SESSION['username'])==false){ ?>
              <li class="nav-item dropdown perfil-1">
              <a href="#" class="navbar-text btn btn-primary m1 m3">
                  Carrito
                </a>
              <a class="nav-text dropdown-toggle btn btn-success perfil-2 m1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ?php // echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark mycolor">
                  ?php
                     // if($_SESSION['username'] == "Jaime Jaramillo"){ ?>
                        <li><a class="dropdown-item" href="admin.php">Administrador</a></li>
                      ?php // }
                  ?>
                  <li><a class="dropdown-item" href="perfil.php">Ver Perfil</a></li>
                  <li><a class="dropdown-item" href="../php/logout.php">Cerrar Sesión</a></li>
                  <li><a class="dropdown-item" href="../php/eliminar.php">Eliminar Cuenta</a></li>
                </ul>
              </li>
            ?php // }   
          ?> -->
          
        </div>
      </div>
    </nav>
  </header>

  <main>
  <section class="mt-5 pt-5 text-center container">
    <div class="row py-lg-1">
      <h1 class="titulo"><i class="fa-solid fa-shop"></i> GamesPortal <span class="marca">Shop</span></h1>
      <div class="col-lg-6 col-md-8 mx-auto mt-2 mb-3">
        <p class="lead text-muted letra fw-bold fst-italic">Encuentra los mejores productos del mundo gaming en nuestra tienda virtual.</p>
      </div>
      <hr class="border border-light border-1 opacity-50">
    </div>
  </section>

  <div class="album pt-3 pb-5 separacion fondo">
    <div class="separacion fondo">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-3">
        
        <?php 
          foreach($res as $row){ ?>
          <div class="col">
            <div class="card shadow-sm overflow-hidden">

              <?php
                $id = $row['id'];
                $imagen1 = "../assets/img/products/".$id."/producto1.webp";

                if(!file_exists($imagen1)) {
                  $imagen1 = "../assets/img/products/imagen-no-disponible.webp";
                }
              ?>

              <img src="<?php echo $imagen1; ?>" class="img__card filtro" alt="Imagen de Referencia del Producto">
              <div class="card-body">
                <a href="details.php?id=<?php echo $row['id'];?>&token=<?php echo hash_hmac('sha256',$row['id'],KEY_TOKEN);?>" class="card-title fw-bold detalles_titulo a_titulo" data-bs-toggle="modal" data-bs-target="#<?php echo $id; ?>"><?php echo $row['nombre_corto']; ?></a>
                <p class="card-title precio">$<?php echo number_format($row['precio'],2,',','.'); ?> COP</p>
                <p class="card-text tam"><?php echo $row['descripcion_corta']; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="details.php?id=<?php echo $row['id'];?>&token=<?php echo hash_hmac('sha256',$row['id'],KEY_TOKEN);?>" class="text-dark mb-3">Detalles</a>
                </div>

                <?php $id = "modal_pasarela".$row['id']; ?>

                <div class="d-grid gap-1">
                  <button type="button" class="btn btn-primary py-2 boton-agregar" data-bs-toggle="modal" data-bs-target="#<?php echo $id; ?>" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha256',$row['id'],KEY_TOKEN); ?>')">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
                </div>

                <div class="modal fade" id="<?php echo $id; ?>" tabindex="-1">
                  <div class="modal-dialog modal_custom">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Producto Agregado al Carrito</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-3 text-center">
                            <i class="fas fa-shopping-cart fa-4x text-primary"></i>
                          </div>
                          <div class="col-9">
                            <p><?php echo $row['nombre_largo'];?></p>
                            <p>Precio: <?php echo number_format($row['precio'],2,',','.'); ?> COP</p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-primary" href="checkout.php">Ir al Carrito</a>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        <?php
          }
        ?>
        
      </div>
    </div>
  </div>
  <!-- Boton de ir hacia arriba -->
    <button onclick="topFunction()" id="botonUp">
      <i class="fa-solid fa-angle-up"></i>
    </button>
  </main>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1 " href="#" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>
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
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Scripts -->
  <script src="../js/button-up.js"></script>

  <script>
    function addProducto(id,token) {
      let url = '../php/clases/carrito.php'
      let formdata = new FormData()
      formdata.append('id',id)
      formdata.append('token',token)

      fetch(url,{
        method: 'POST',
        body: formdata,
        mode: 'cors'
      }).then(response => response.json())
      .then(data => {
        if(data.ok) {
          let elemento = document.getElementById("num_cart")
          elemento.innerHTML = data.numero;
        }
      })
    }
  </script>
  
</body>
</html>