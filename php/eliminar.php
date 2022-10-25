<?php
    include '../php/conexion.php';

    session_start();

    $username = $_SESSION['username'];

    $sql = "DELETE FROM users WHERE username = '$username'";

    $eliminar = $conn->query($sql);

    session_destroy();

    header("Location: ../pages/login.php");

    $conn->close();
?>