<?php
  include_once 'includes/templates/header.php';
?>
<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
include_once 'includes/funciones/paypalconfig.php';
$paymentId = $_GET['paymentId'];
if ($paymentId){
$payment = Payment::get($paymentId, $apiContext);
$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

$resultado = $payment->execute($execution, $apiContext);
$respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;
}
?>
<main class="respuesta <?php if($respuesta){echo 'exito';}else{echo 'error';} ?>">
  <div class="contenedor">
    <?php if ($respuesta){?>
    <h1 class="titulo_pagado">Tu pago se proceso correctamente</h1>
    <p>Id de pago: <?php echo $_GET['parmentId'] ?></p>
    <p>Id de cliente: <?php echo $_GET['payerID']?></p>
    <p>Por favor guarda estos datos en un lugar seguro</p>
    <?php }else{ ?>
    <h1 class="titulo_error">Hubo un error en tu pago</h1>
    <p>Por favor vuelve a registrarte haciendo click <a href="registro.php">aqui</a></p>
    <?php } ?>
  </div>
</main>
<?php
  include_once 'includes/templates/footer.php';
?>
