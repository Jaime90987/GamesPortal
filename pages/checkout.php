<?php 

  require '../php/config.php';
  require '../php/conexion.php';
  require_once '../vendor/autoload.php';
  MercadoPago\SDK::setAccessToken('TEST-4362180245266717-092011-62c897f4b46bc3df37b18f6277328cbd-1199484650');

  $db = new Database();
  $con = $db->conectar();

  $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

  //print_r($_SESSION);

  $lista_carrito = array();

  if($productos != null) {
    foreach($productos as $clave => $cantidad) {
      $query = $con->prepare("SELECT id, nombre_largo, precio, descuento, $cantidad AS cantidad  FROM products WHERE id=? AND estado=1");
      $query->execute([$clave]);     
      $lista_carrito[] = $query->fetch(PDO::FETCH_ASSOC);
    }
  }else {

  }

  //session_destroy();

?>

<!-- ?php

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
?> -->

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
                <a href="#" class="m1 m3 carrito__alineacion">
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
              
              <div class="table-response">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Precio Unitario</th>
                      <th>Cantidad</th>
                      <th>Subtotal</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($lista_carrito == null){
                      echo '<tr><td colspan="5" class="text-center"><b>Carrito Vacio</b></td></tr>';
                    }else {

                      $total = 0;

                      foreach($lista_carrito as $producto) {
                        $_id = $producto['id'];
                        $nombre = $producto['nombre_largo'];
                        $precio = $producto['precio'];
                        $cantidad = $producto['cantidad'];
                        $descuento = $producto['descuento'];
                        $precio_desc = $precio - (($precio * $descuento)/100);
                        $subtotal = $cantidad * $precio_desc;
                        $total += $subtotal; 
                      ?>
                      <tr>
                        <td><?php echo $nombre;?></td>
                        <td><?php echo MONEDA . number_format($precio_desc,0,'.',','). PAIS;?></td>
                        <td>
                          <input type="number" class="form-control form-control-sm" id="cantidad_?php echo $_id; ?>" min="1" max="5" step="1" value="<?php echo $cantidad; ?>" size="5" onchange="actualizarCantidad(this.value, <?php echo $_id;?>)" >
                        </td>
                        <td>
                          <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"> 
                            <?php echo MONEDA . number_format($subtotal,0,'.',','). PAIS;?>
                          </div>
                        </td>
                        <td><a href="#" id="eliminar" data-bs-id="<?php echo $_id;?>" onclick="eliminar()"><i class="fa-regular fa-circle-xmark"></i></a></td>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td colspan="3"></td>
                        <td colspan="2">
                          <p class="h3" id="total"><?php echo MONEDA . number_format($total,0,'.',','). PAIS;?></p>
                        </td>
                      </tr>
                    </tbody>
                  
                    <?php } ?>
                </table>

                <div class="row">
                  <div class="col-md-4 offset-md-8 d-grid gap-2">
                    <button class="btn btn-primary btn-lg">Realizar Pago</button>
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
    function actualizarCantidad(cantidad,id) {
      let url = '../php/clases/actualizar_carrito.php'
      let formData = new FormData()
      formData.append('action','agregar')
      formData.append('id',id)
      formData.append('cantidad',cantidad)

      fetch(url,{
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response => response.json())
      .then(data => {
        if(data.ok) {

          let divsubtotal = document.getElementById('subtotal_' + id)
          divsubtotal.innerHTML = data.sub

          let total = 0.00
          let list = document.getElementsByName('subtotal[]')

          for(let i=0; i < list.length; i++) {
            total += parseFloat(list[i].innerHTML.replace(/[$,COP]/g, ''))
          }

          total = new Intl.NumberFormat('en-US',{
            minimumFractiondigits: 2
          }).format(total)

          document.getElementById('total').innerHTML = '<?php echo MONEDA; ?>' + total + '<?php echo PAIS; ?>'

        }
      })
    }
  </script>
  
</body>
</html>