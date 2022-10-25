<?php

    require '../config.php';
    require '../conexion.php';

    if(isset($_POST['action'])) {
        $action = $_POST['action'];
        $id = isset($_POST['id']) ? $_POST['id'] : 0;

        if($action == 'agregar') {
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
            $respuestas = agregar($id,$cantidad);

            if($respuestas > 0) {
                $datos['ok'] = true;
            }else {
                $datos['ok'] = false;
            }

            $datos['sub'] = MONEDA . number_format($respuestas,0,'.',','). PAIS ;
        }else {
            $datos['ok'] = false;
        }
    }else {
        $datos['ok'] = false;
    }

    echo json_encode($datos);

    function agregar($id,$cantidad) {

        $respuesta = 0;

        if($id > 0 && $cantidad > 0 && is_numeric(($cantidad))) {
            if(isset($_SESSION['carrito']['productos'][$id])) {
                $_SESSION['carrito']['productos'][$id] = $cantidad;

                $db = new Database();
                $con = $db->conectar();

                $query = $con->prepare("SELECT precio, descuento FROM products WHERE id=? AND estado=1 LIMIT 1");
                $query->execute([$id]);    
                $row = $query->fetch(PDO::FETCH_ASSOC);

                $precio = $row['precio'];
                $descuento = $row['descuento'];
                $precio_descuento = $precio - (($precio * $descuento) / 100);

                $respuesta = $cantidad * $precio_descuento;

                return $respuesta;
            }
        }else {
            return $respuesta;
        }
    }

?>