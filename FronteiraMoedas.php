<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 14/05/16
 * Time: 18:52
 */
if(isset($_POST['objeto'])){
    $jsonObject = json_decode($_POST['jsonObject']);
    $registroId = $jsonObject->usuarioRemetente->registrationId;
    $nick = $jsonObject->usuarioRemetente->nickname;
    $urlFoto = $jsonObject->usuarioRemetente->urlFoto;

    //echo "asdasd ".$jsonObject;
    $controlador = ControladorUser::getInstance();


    echo json_encode(['resposta'=>$controlador->cadastrar($registroId,$nick,$urlFoto)]);
    //echo json_encode($controlador->cadastrar($registroId,$nick));
}