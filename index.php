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
<a href="ConversoMoedas.php">Conversor De Moedas</a>
<br>
<p>1 mandar a requisição para http://conversormoedas.cloudapp.net/TrabalhoCloud/index.php com os
    parametros json:
    "valor" - É o valor que irá ser convertido,
    "moedaAtual" - É o nome da moeda do valor que será convertido,
    "moedaConvertida" - É a moeda na qual o valor será convertido </p>

<p>2 {"moedaAtual":"Real","moedaConvertida":"Dolar","valor":4}</p>

<p>3 Os valores "moedaAtual" e "moedaConvertida", tem que vim com um desses nomes:
    -Dolar
    -Real
    -Euro
    Caso contrario dará erro</p>

<p>4 O JSON de retorno será {"moedaAtual":"Real","moedaConvertida":"Dolar","valor":4, "valorConvertido":1}
    Onde "valorConvertido" será o resultado da operação de converter 4 Reais em dola.</p>

</body>
</html>
