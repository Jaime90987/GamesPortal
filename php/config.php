<?php 

    define("KEY_TOKEN", "XxuEt%!3J4sVvp8*f+wI1dfgd&dfs-&");
    define("MONEDA", "$");
    define("PAIS","COP");

    session_start();

    $num_cart = 0;

    if(isset($_SESSION['carrito']['productos'])) {
        $num_cart = count($_SESSION['carrito']['productos']);
    }

?>