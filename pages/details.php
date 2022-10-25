<?php 

  require '../php/config.php';
  require '../php/conexion.php';
  require_once '../vendor/autoload.php';
  MercadoPago\SDK::setAccessToken('');

  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $token = isset($_GET['token']) ? $_GET['token'] : '';

  if($id == '' || $token == '') {
    echo "<script>alert('Error al procesar la petición.');window.history.back();</script>";
  }else {
    $token_tmp = hash_hmac('sha256',$id,KEY_TOKEN);

    if($token == $token_tmp) {
      $query = "SELECT count(id) FROM products WHERE id=$id AND estado=1";
      $res = mysqli_query($conn, $query);
      $registros = mysqli_num_rows($res);
      
      if($registros > 0) {
        $query = "SELECT * FROM products WHERE id=$id AND estado=1";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($res);

          $nombre = $row['nombre_largo'];
          $descripcion = $row['descripcion_larga'];
          $precio = $row['precio'];
          $descuento = $row['descuento'];
          $precio_descuento = $precio - (($precio * $descuento) / 100);
          $dir_images = '../assets/img/products/'.$id.'/';
          $ruta_Img = $dir_images.'producto1.webp';

          // Mercado pago

          $preference = new MercadoPago\Preference();

          $item1 = new MercadoPago\Item();
          $item1->id = $id;
          $item1->title = $nombre;
          $item1->quantity = 1;
          $item1->unit_price = $precio;
          $item1->currency_id = "COP";

          $preference->items = array($item1);

          $preference->back_urls = array(
            "success" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php", 
            "failure" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php"
          );
                                  
          $preference->auto_return = "approved";
          $preference->binary_mode = true;
                                  
          $preference->save(); 

          // Mercado pago

          if(!file_exists($ruta_Img)) {
            $ruta_Img = "../assets/img/products/imagen-no-disponible.webp";
          }
            
          $imagenes = array();

          if(file_exists($dir_images)) {
            $dir = dir($dir_images);

            while(($archivo = $dir->read())!=false) {
              if($archivo != 'producto1.webp' && (strpos($archivo, 'webp') || strpos($archivo, 'png'))) {
                $imagenes[] = $dir_images . $archivo;
              }
            }
            $dir->close();          
          }
        }else {
          echo "<script>alert('Error al procesar la petición.');window.history.back();</script>"; 
        }    
    }else {
      echo "<script>alert('Error al procesar la petición.');window.history.back();</script>"; 
    }
  }     

  if(!$res) {
    echo "<script>alert('Error en la operación.')</script>";
  }

  print_r($_SESSION);

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
  <link rel="stylesheet" href="../css/style_details.css" type="text/css">
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
  <link rel="manifest" crossorigin="use-credentials" href="manifest.json">
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
          
          <!-- ?php 
            if(empty($_SESSION['username'])==true){ ?> -->
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
            <!-- ?php //} ?>   -->

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
  <section class="mt-5 pt-5 mb-3 text-center container">
    <div class="row py-lg-1">
      <h1 class="titulo"><i class="fa-solid fa-shop"></i> GamesPortal <span class="marca">Shop</span></h1>
    </div>
  </section>

  <div class="album py-5 separacion fondo">
    <div class="separacion fondo">
      <div class="container container-principal">
        <div class="cols-sm-1 cols-md-1 cols-lg-2 cols-xl-2 color__blanco">
          <div class="row color__blanco">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 img_poss">

              <?php 
              
              $num_elementos = count($imagenes);  

              if($num_elementos == 0) {?>
                
                <img src="<?php echo $ruta_Img;?>" class="d-block w-100 fancybox" data-fancybox="gallery1" alt="Imagen de referencia del producto">
  
              <?php }else {?>

                <div id="carouselImages" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">

                    <?php 
                      for($i=-1; $i < count($imagenes); $i++) {
                        if($i == -1) { ?>
                          <button type="button" data-bs-target="#carouselImages" data-bs-slide-to="<?php echo $i+1; ?>" class="active" aria-current="true" aria-label="<?php echo "Slide ".($i+2); ?>"></button>
                        <?php }else { ?>
                          <button type="button" data-bs-target="#carouselImages" data-bs-slide-to="<?php echo $i+1; ?>" aria-label="<?php echo "Slide ".($i+2); ?>"></button>
                        <?php } ?>
                    <?php } ?>

                  </div>
                  <div class="carousel-inner">
                    
                    <?php 
                      for($i=-1; $i < count($imagenes); $i++) {
                        if($i == -1) { ?>
                          <div class="carousel-item active">
                            <img src="<?php echo $ruta_Img;?>" class="d-block w-100 fancybox" data-fancybox="gallery1" alt="Imagen de referencia del producto">
                          </div>
                        <?php }else { ?>
                          <div class="carousel-item">
                          <img src="<?php echo $imagenes[$i];?>" class="d-block w-100 fancybox" data-fancybox="gallery1" alt="Imagen de referencia del producto">
                        </div>
                        <?php } ?>
                    <?php } ?>

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

              <?php } ?>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col align-self-center">
              <h2 class="titulo__producto"><?php echo $row['nombre_largo']; ?></h2>

              <?php if($descuento > 0) {?>
                <p><del><?php echo MONEDA . number_format($precio,2,',','.') . " " . PAIS; ?></del></p>
                <h5 class="precio">
                  <?php echo MONEDA . number_format($precio_descuento,2,',','.') . " " . PAIS; ?>
                  <small classs="text-succes"> - <?php echo $descuento; ?>% de descuento.</small>
                </h5>
              <?php } else { ?>
                <h5 class="precio"><?php echo MONEDA . number_format($precio,2,',','.') . " " . PAIS; ?></h5>
              <?php } ?>

              <hr>
              <h4>Descripción</h4>
              <p><?php echo $row['descripcion_larga'];?></p>                 
              <hr>
              <h5>Más detalles del producto</h5>
              <ul class="pb-3">
                <li><?php echo $row['caracteristica1']; ?></li>
                <li><?php echo $row['caracteristica2']; ?></li>
                <li><?php echo $row['caracteristica3']; ?></li>
                <li><?php echo $row['caracteristica4']; ?></li>
                <li><?php echo $row['caracteristica5']; ?></li>
              </ul>
              <hr>
              <div class="d-flex flex-row mb-3 justify-content-center align-content-center">
                <div class="checkout-btn btn boton__color padding__boton espacio__boton"></div>
                <script>
                  const mp = new MercadoPago('TEST-adc1d969-90da-40a0-845d-7379afe9f569', {
                    locale: 'es-CO'
                  });

                  mp.checkout({
                      preference: {
                        id: '<?php echo $preference->id; ?>'
                    },
                    render: {
                      container: ".checkout-btn",
                      label: 'Comprar Ahora',
                    }
                  });
                </script>
                <button class="btn btn-outline boton__outline letra__outline padding__boton" type="button" data-bs-toggle="modal" data-bs-target="#id" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">Agregar al Carrito</button>

                <div class="modal fade" id="id" tabindex="-1">
                  <div class="modal-dialog modal_custom">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Producto Agregado al Carrito</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-3 text-center">
                            <i class="fas fa-shopping-cart fa-4x carrito__color"></i>
                          </div>
                          <div class="col-9">
                            <p><?php echo $row['nombre_largo'];?></p>
                            <p>Precio: <?php echo number_format($row['precio'],2,',','.'); ?> COP</p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn boton__color">Ir al Carrito</button>
                        <button type="button" class="btn boton__outline" data-bs-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
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
      let url = '../php/clases/carrito.php';
      let formdata = new FormData();
      formdata.append('id',id);
      formdata.append('token',token);

      fetch(url,{
        method: 'POST',
        body: formdata,
        mode: 'cors'
      }).then(response => response.json())
      .then(data => {
        if(data.ok) {
          let elemento = document.getElementById("num_cart");
          elemento.innerHTML = data.numero;
        }
      })
    }
  </script>
  
</body>
</html>
