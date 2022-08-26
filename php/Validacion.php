<?php
    require_once "/php/Conexion.php";

    $user = $_POST['USER'];
    $password = $_POST['PASSWORD'];
    $news = $_POST['NEWS'];

    // consulta

    $consulta = "SELECT * FROM LOGIN WHERE USER ='$user' AND PASSWORD = '$password' AND NEWS = '$news'";

    $resultado = myqli_query($conexion, $consulta); //Primero conexión y luego la consulta

    $registros = mysqli_num_rows($resultado); //Saber el numero de registros encontrados 0 o 1

    if($registros>0){
        session_start(); //se crea una sesion ya que el registro existe
        $_SESSION["USER"] = $user;

        if($user == "Jaime"){ //si el name es igual a Jaime (Admin) se abre la pagina
            header("Location:../usuario.html");
        }else{
            header("Location:../pages/login1.php");
        }

    }else{
        echo "<script>alert("El usuario, contraseña y/o noticia son incorrectos.");window.history.go(-1);</script>";
    }
    
?>