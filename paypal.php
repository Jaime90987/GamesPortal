<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal</title>

    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
</head>
<body>

<div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({

        style:{
          color: 'blue',
          shape: 'pill',
          label: 'pay'
        },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: 100
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          actions.order.capture().then(function(orderData) {
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            console.log(orderData);
            window.locatio.href="http://localhost/web-jaime_jaramillo-xampp/pages/shop.php";

            //const transaction = orderData.purchase_units[0].payments.captures[0];
            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        },

        onCancel: function(data){
          alert("Pago cancelado");
          console.log(data);
        }
      }).render('#paypal-button-container');
    </script>
    
</body>
</html>