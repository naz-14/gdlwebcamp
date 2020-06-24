<?php
require 'vendor/autoload.php';

define('URL_SITIO', 'http://camp14uav.getenjoyment.net');
$apiContext = new \PayPal\Rest\ApiContext(
  new PayPal\Auth\OAuthTokenCredential(
    'AVX4wUovO-4ljIR_QhXIp4X8mlrzcERjvNZn14UBTI-FTWbVvM4cMBT6rqSXv0CZhdsi2W6VKWMedL20',
    'EGYP_Kyj3dkfkNwM2Cqhw5HXzpTOo4qgtlxY2pBWs10cxF13JRL8tino_H3LJ1ttCRBg0BsaZdzaxvkY'
  )
);
