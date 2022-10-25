<?php

  include '../php/conexion.php';

  session_start();

  $_SESSION['ur'] = false;
  $_SESSION['w'] = false;
  $_SESSION['us'] = false;
  $_SESSION['e'] = false;
  $_SESSION['pm'] = false;
  
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $news = $_POST['news'];
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $firstsurname = $_POST['first_surname'];
    $lastsurname = $_POST['last_surname'];
    $typeic = $_POST['type_ic'];
    $identitycard = $_POST['identitycard'];
    $educationlevel = $_POST['education_level'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $typecl = $_POST['type_cl'];
    $payment = $_POST['payment'];

    if($password == $cpassword){
      $sql = "SELECT * FROM users WHERE username='$username'";
      $result = mysqli_query($conn, $sql);
      
      $sql2 = "SELECT * FROM users WHERE email='$email'";
      $result2 = mysqli_query($conn, $sql2);
      
      if((!$result->num_rows > 0) && (!$result2->num_rows > 0)){
        $sql = "INSERT INTO users (username,email,password,news,first_name,middle_name,first_surname,last_surname,type_ic,identitycard,education_level,country,city,address,phone,type_cl,payment) 
          VALUES ('$username','$email','$password','$news','$firstname','$middlename','$firstsurname','$lastsurname','$typeic','$identitycard','$educationlevel','$country','$city','$address','$phone','$typecl','$payment')";
          $result3 = mysqli_query($conn, $sql3);
      
        if($result3){
          $_SESSION['ur'] = true;
          header("Location: admin.php");
        }else{
          $_SESSION['w'] = true;
        }
      }else{
        if($result->num_rows > 0){
          $_SESSION['us'] = true;
        }
        if($result2->num_rows > 0){
          $_SESSION['e'] = true;
        }
      }
    }else{
      $_SESSION['pm'] = true;
    }

    header("Location: ../pages/admin.php");
  }
  $conn->close();
?>