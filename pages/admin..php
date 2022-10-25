<?php 
  include '../php/conexion.php';

    error_reporting(0);

    session_start();

    if(!isset($_SESSION['username'])){
      header("Location: login.php");
    }

    if($_SESSION['username']!='admin'){
        header("Location: perfil.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <base href="web-jaime_jaramillo-xampp">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamesPortal - Admin</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style_admin.css" type="text/css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/2b3617159f.js" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
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

<script>
  function alerta() {
    var respuesta = confirm("Desea borrarlo?");
    if( respuesta = true){
      return true;
    }else {
      return false;
    }
  }
</script>

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
              <a class="nav-link light mypadding" href="contacto.php">Contáctanos</a>
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
              <li><a class="dropdown-item" href="../php/logout.php">Cerrar Sesión</a></li>
              <li><a class="dropdown-item" href="../php/eliminar.php">Eliminar Cuenta</a></li>
            </ul>
          </li>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- ------------------------------main--------------------------------------- -->
  <main>

    <div class="container pt-3 pb-2 container-principal">
      <div class="mymargen">
        <h2 class="titulo mb-3 text-center"><i class="fa-solid fa-screwdriver-wrench"></i> Administrador</h2>
      </div>

      <div class="margen">
        <ul class="nav nav-tabs justify-content-center" id="myTab">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin.php">Registrar Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="admin..php">Lista de Usuarios</a>
          </li>
        </ul>
      </div>

      <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="fa-solid fa-check"></i> User Successfully Deleted
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php $_SESSION['message']=null; } ?>
      
      <section class="myfieldset2">

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Nombre de Usuario</th>
              <th>Email</th>
              <th>Preferencia</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Tipo de Identificación</th>
              <th>Num. Identificación</th>
              <th>Pais</th>
              <th>Ciudad</th>
              <th>Celular</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM users WHERE username !='admin'";
              $data = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($data)){ ?>
                <tr>
                  <td> <?php echo $row['username'];?> </td>
                  <td> <?php echo $row['email'];?> </td>
                  <td> <?php echo $row['news'];?> </td>
                  <td> <?php echo $row['first_name'];?> </td>
                  <td> <?php echo $row['first_surname'];?> </td>
                  <td> <?php echo $row['type_ic'];?> </td>
                  <td> <?php echo $row['identitycard'];?> </td>
                  <td> <?php echo $row['country'];?> </td>
                  <td> <?php echo $row['city'];?> </td>
                  <td> <?php echo $row['phone'];?> </td>
                  <td>
                    <a href="../php/eliminar_tabla.php?id=<?php echo $row['username']?>" class="btn btn-danger boton_trash">
                      <i class="fa-solid fa-trash icono"></i>
                    </a>
                    <!-- <a onclick="alerta(?php $row['username']?>)" class="btn btn-danger boton_trash">
                      <i class="fa-solid fa-trash icono"></i>
                    </a> -->
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </section>
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
      <a class="text-white" href="https://mdbootstrap.com/" target="_blanck">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="../js/button-up.js"></script>

</body>

<!-- <script type="text/javascript">
    function alerta(id){
      swal("Are you really sure you want to delete this account?","You will not be able to recover this account","warning", {
        buttons: {
          cancel: "No, Cancel",
          delete: true,
        },
      })
      .then((value) => {
        switch (value) {
          case "delete":
            window.location.href="../php/eliminar_tabla.php?id="+id; 
            break;
        }
      });
    }
  </script> -->

</html>