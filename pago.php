<?php
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['email'];
  $regalo = $_POST['regalo'];
  $total = $_POST['total_pedido'];
  $fecha = date('Y-m-d H:i:s');
  //Pedidos
  $boletos = $_POST['boletos'];
  $numeroBoletos= $boletos;
  $extras = $_POST['pedido_extra'];
  $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
  $precioCamisas = $_POST['pedido_extra']['camisas']['precio'];
  $etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];
  $precioEtiquetas = $_POST['pedido_extra']['etiquetas']['precio'];
  include_once 'includes/funciones/funciones.php';
  $pedido = productosJson($boletos, $camisas, $etiquetas);
//Eventos
  $eventos = $_POST['registro'];
  include_once 'includes/funciones/funciones.php';
  $registro = eventosJson($eventos);
  try {
    require_once 'includes/funciones/bd_conexion.php';
    $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssis", $nombre, $apellido, $correo, $fecha, $pedido, $registro, $regalo, $total);
    $stmt->execute();
    $ID_cliente = $stmt->insert_id;
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
  include_once 'includes/funciones/paypalconfig.php';

// Create new payer and method
  $payer = new Payer();
  $payer->setPaymentMethod("paypal");

// Set redirect URLs
  $redirectUrls = new RedirectUrls();
  $redirectUrls->setReturnUrl(URL_SITIO."/pagado.php?&id_pago={$ID_cliente}")
    ->setCancelUrl(URL_SITIO."/pagado.php?&id_pago={$ID_cliente}");

  $arregloArticulos = array();
  $i=0;
  foreach ($numeroBoletos as $key => $value){
    if ((int) $value['cantidad'] > 0){
      ${"articulo$i"} = new Item();
      ${"articulo$i"}->setName('Pase: ' . $key)
        ->setQuantity((int) $value['cantidad'])
        ->setCurrency('USD')
        ->setPrice((int) $value['precio']);
      $arregloArticulos[] = ${"articulo$i"};
      $i++;
    }
  }
  foreach ($extras as $key => $value){
    if ((int) $value['cantidad'] > 0){
      if ($key == 'camisas'){
        $precio = ((int) $precioCamisas)*0.93;
      }
      else{
        $precio = ((int) $precioEtiquetas);
      }
      ${"articulo$i"} = new Item();
      ${"articulo$i"}->setName('Articulo: ' . $key)
        ->setQuantity($value['cantidad'])
        ->setCurrency('USD')
        ->setPrice($precio);
      $arregloArticulos[] = ${"articulo$i"};
      $i++;
    }
  }
  $listaArticulos = new ItemList();
  $listaArticulos->setItems($arregloArticulos);

// Set payment amount
  $amount = new Amount();
  $amount->setCurrency("USD")
    ->setTotal($total);

// Set transaction object
  $transaction = new Transaction();
  $transaction->setAmount($amount)
    ->setDescription("Payment description")
    ->setItemList($listaArticulos)
    ->setInvoiceNumber($ID_cliente);

// Create the full payment object
  $payment = new Payment();
  $payment->setIntent('sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

  try {
    $payment->create($apiContext);

    // Get PayPal redirect URL and redirect the customer
    $approvalUrl = $payment->getApprovalLink();

    // Redirect the customer to $approvalUrl
  } catch (PayPal\Exception\PayPalConnectionException $ex) {
    echo $ex->getCode();
    echo $ex->getData();
    die($ex);
  } catch (Exception $ex) {
    die($ex);
  }
  header("Location: {$approvalUrl}");
}else{
  header('Location: http://camp14uav.getenjoyment.net/registro.php');
}
