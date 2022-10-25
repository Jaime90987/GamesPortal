<?php
    //en cmd ubicrase en el directorio del proyecto y escribir: composer require "mercadopago/dx-php"

    require_once 'vendor/autoload.php';
    MercadoPago\SDK::setAccessToken('TEST-4362180245266717-092011-62c897f4b46bc3df37b18f6277328cbd-1199484650');

    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->id = '00001';
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 150000;
    $item->currency_id = "COP";

    $preference->items = array($item);

    $preference->back_urls = array(
      "success" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php", 
      /*en esa ruta poner 
        <?php 
          $payment = $GET['payment_id'] ;
          $status = $GET['status'] ;
          $payment_type = $GET['payment_type'] ;
          $order_id = $GET['merchant_order_id'] ;

          echo "<h3>Pago exitoso</h3>";

          echo $payment.'<br>';
          echo $status.'<br>';
          echo $payment_type.'<br>';
          echo $order_id.'<br>';
        ?
      */
      "failure" => "http://localhost/web-jaime_jaramillo-xampp/pages/shop.php"
      /*en esa ruta poner 
        <?php 
          echo "<h3>Error al realizar el pago.</h3>";
        ?
      */
    );

    $preference->auto_return = "approved";
    $preference->binary_mode = true;

    $preference->save();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MercadoPago</title>
    <!-- SDK MercadoPago.js V2 -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>

    <div class="checkout-btn"></div>
    <script>
      const mp = new MercadoPago('TEST-adc1d969-90da-40a0-845d-7379afe9f569', {
        locale: 'es-CO'
      });

      mp.checkout({
        preference: {
          id: '<?php echo $preference->id; ?>'
        },
        render: {
          container: '.checkout-btn',
          label: 'Pagar',
        }
      });
    </script>
    
</body>
</html>