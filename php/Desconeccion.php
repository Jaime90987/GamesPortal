<?php
    session_start();
    session_destroy();

    $_SESSION = array();
    header("Location:../pages/login1.php");

?>