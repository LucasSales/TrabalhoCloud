<?php
include_once "Conversor.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $con = new Conversor();
    $json = json_decode(file_get_contents('php://input'), true);
    try {
        $a = $con->converter($json["valor"], $json["moedaAtual"], $json["moedaConvertida"]);
        $json["valorConvertido"] = $a;
        echo json_encode($json);
        exit;
    } catch (Exception $e) {
        echo "Deu algum erro no json enviado";
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<!--http://conversormoedas.cloudapp.net/TrabalhoCloud/index.php-->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Conversor de Moedas</a>
        </div>
    </div>
</nav>

<br></br>
<br></br>
<div id="main" class="container-fluid">
    <a href="ConversoMoedas.php">Ir para o Conversor De Moedas</a>
    <br>
    <p>1 mandar a requisição para http://conversormoedas.cloudapp.net/TrabalhoCloud/index.php com os
        parâmetros json:
        "valor" - É o valor que irá ser convertido,
        "moedaAtual" - É o nome da moeda do valor que será convertido,
        "moedaConvertida" - É a moeda na qual o valor será convertido </p>

    <p>2 {"moedaAtual":"Real","moedaConvertida":"Dolar","valor":4}</p>

    <p>3 Os valores "moedaAtual" e "moedaConvertida", tem que vim com um desses nomes:
        -Dolar
        -Real
        -Euro
        Caso contrário dará erro</p>

    <p>4 O JSON de retorno será {"moedaAtual":"Real","moedaConvertida":"Dolar","valor":4, "valorConvertido":1}
        Onde "valorConvertido" será o resultado da operação de converter 4 Reais em dola.</p>
</div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
