<?php

    // $server = 'sql311.epizy.com';
    // $user = 'epiz_32424567';
    // $pass = 'zChNlbkdFMM';
    // $database = 'epiz_32424567_myweb';

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'web';
    
    $conn = mysqli_connect($server,$user,$pass,$database);

    if(!$conn){
        die("<script>alert('Connection failed.'".mysqli_connect_error().")</script>");
    }

    class Database {
        private $server_pdo = 'localhost';
        private $user_pdo = 'root';
        private $pass_pdo = '';
        private $database_pdo = 'web';
        private $charset_pdo = 'utf8';

        function conectar() {
            try{
                $conexion = "mysql:host=".$this->server_pdo."; dbname=".$this->database_pdo."; charset=".$this->charset_pdo;
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => FALSE
                ];

                $pdo = new PDO($conexion,$this->user_pdo,$this->pass_pdo,$options);

                return $pdo;
            } catch(PDOException $e) {
                echo '<script>alert("Connection failed. ".$e->getMessage();)</script>';
                exit;
            }
        }
    }
?>