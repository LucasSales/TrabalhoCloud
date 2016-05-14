<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 14/05/16
 * Time: 14:42
 */

$url  = 'http://localhost/Cloud/index.php';

$data = ["moedaAtual" => "Real","moedaConvertida" => "Dolar","valor"=>4];
$data = json_encode($data);

$ch   = curl_init();
curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);
$resultado = json_decode($result);
//echo $resultado;

