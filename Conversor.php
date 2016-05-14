<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/04/16
 * Time: 17:09
 */
class Conversor{
    private $REAL = 1;
    private $DOLAR = 0.280135586;
    private $EURO = 0.249975002;
    private $EURO_DOLAR = 0.88723;

    private $url  = 'http://ec2-52-37-59-164.us-west-2.compute.amazonaws.com:3000/calculator';

    function converter($valor,$opcao1,$opcao2){

        $valor = (float) $valor;

        if($opcao1 == 'Real'){
            if($opcao2 == 'Euro'){
                $data = ["type" => "multiply","firstValue" => $valor ,"secondValue"=>$this->EURO];
                $data = json_encode($data);
            }else if($opcao2 == 'Dolar'){
                $data = ["type" => "multiply","firstValue" => $valor,"secondValue"=>$this->DOLAR];
                $data = json_encode($data);
            }else{
                $data = ["type" => "multiply","firstValue" => $valor,"secondValue"=>$this->REAL];
                $data = json_encode($data);
            }
        }else if($opcao1 == 'Dolar'){
            if($opcao2 == "Euro"){
                $data = ["type" => "multiply","firstValue" => $valor,"secondValue"=>$this->EURO_DOLAR];
                $data = json_encode($data);
            }else if($opcao2 == "Real"){
                $data = ["type" => "divide","firstValue" => $valor,"secondValue"=>$this->DOLAR];
                $data = json_encode($data);
            }else{
                $data = ["type" => "divide","firstValue" => $valor,"secondValue"=>$this->REAL];
                $data = json_encode($data);
            }
        }else if($opcao1 == "Euro"){
            if($opcao2 == 'Dolar'){
                $data = ["type" => "divide","firstValue" => $valor,"secondValue"=>$this->EURO_DOLAR];
                $data = json_encode($data);
            }else if($opcao2 == "Real"){
                $data = ["type" => "divide","firstValue" => $valor,"secondValue"=>$this->EURO];
                $data = json_encode($data);
            }else {
                $data = ["type" => "divide","firstValue" => $valor,"secondValue"=>$this->REAL];
                $data = json_encode($data);
            }
        }

        $ch   = curl_init();
        curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        $resultado = json_decode($result);
        return $resultado->result;
    }


}