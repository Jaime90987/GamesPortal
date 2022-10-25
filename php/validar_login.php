<?php

  include '../php/conexion.php';

  session_start();

  $_SESSION['u'] = false;
  $_SESSION['p'] = false;
  $_SESSION['n'] = false;

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $user = $username;
    $password = md5($_POST['password']);
    $news = $_POST['news'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND news='$news'";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT * FROM users WHERE username='$username'";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT * FROM users WHERE username='$username' AND news='$news'";
    $result3 = mysqli_query($conn, $sql3);

    if($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['type_cl'] = $row['type_cl'];

      if($username == "admin"){ 
        header("Location: ../pages/admin.php");
      }else{
        header("Location: ../index.php");
      }
        
    }else{
      if(!$result1->num_rows > 0){
        $_SESSION['u'] = true;
      }

      if(!$result2->num_rows > 0){
        $_SESSION['p'] = true;
      }

      if(!$result3->num_rows > 0){
        $_SESSION['n'] = true;
      }

      $_SESSION['user'] = $user;

      header("Location: ../pages/login.php");
    }
  }
  $conn->close();
?>