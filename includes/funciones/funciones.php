<?php

function productosJson(&$boletos, &$camisas, &$etiquetas)
{
  $dias = array(0 => 'pase_undia', 1 => 'pase_dosdias', 2 => 'pase_completo');
  $arregloBoletos = array();
  $i = 0;
  foreach ($boletos as $key => $value){
    $arregloBoletos[$i] = (int) $value['cantidad'];
    $i++;
  }
  $total_boletos = array_combine($dias,$arregloBoletos);
  $json = array();

  foreach ($total_boletos as $key => $boletos) {
    if ((int) $boletos > 0) {
      $json[$key] = (int) $boletos;
    }
  }
  if ($camisas > 0 ){
    $json['camisas']= $camisas;
  }
  if ($etiquetas > 0){
    $json['etiquetas'] = $etiquetas;
  }
  return json_encode($json);
}

function eventosJson(&$eventos)
{
  $eventos_json = array();
  foreach ($eventos as $evento) {
    $eventos_json['eventos'][] = $evento;
  }
  return json_encode($eventos_json);
}
