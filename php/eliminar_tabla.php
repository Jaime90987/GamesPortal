<?php
    
    include '../php/conexion.php';

    session_start();

    header("Location: ../pages/admin..php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM users WHERE username='$id'";
        $result = mysqli_query($conn,$query);
        
        if(!$result){
            die("Query Failed");
        }else{
            $_SESSION['message'] = true;
        }
        header("Location: ../pages/admin..php");
    }

    $conn->close();
?>