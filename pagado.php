<?php
use PayPal\Rest\ApiContext;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

include_once 'includes/funciones/paypalconfig.php';
  $paymentId = $_GET['paymentId'];
  $payment = Payment::get($paymentId, $apiContext);
  $execution = new PaymentExecution();
  $execution->setPayerId($_GET['PayerID']);

  $resultado = $payment->execute($execution, $apiContext);

  $respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;

  include_once 'includes/templates/header.php';
?>
  <div class="respuesta">
    <?php if ($respuesta == 'completed') {?>
      <h1>Gracias!</h1>
      <p>Tu pago se proceso correctamente</p>
      <p>Tu Id de Usuario es: <?php echo $_GET['PayerID'];?></p>
      <p>Tu numero Id de Pago es: <?php echo $_GET['paymentId'];?> </p>
    <?php }?>
  </div>

<?php
  include_once 'includes/templates/footer.php';
?>
