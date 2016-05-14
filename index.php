<?php
    include_once "Conversor.php";
    if(isset($_GET['valor'])){
        $con = new Conversor();
        $valor = $_GET['valor'];
        $atual = $_GET['atual'];
        $convertido = $_GET['convertido'];

        $a = $con->converter($valor,$atual,$convertido);

        echo $a;
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $con = new Conversor();
        $json = json_decode(file_get_contents('php://input'),true);
        $a = $con->converter($json["valor"],$json["moedaAtual"],$json["moedaConvertido"]);
        $json["valorConvertido"] = $a;
        echo json_encode($json);
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="text" name="valor">
    <select name="atual">
        <option value="Real">Real</option>
        <option value="Dolar">Dólar</option>
        <option value="Euro">Euro</option>
    </select>
    <select name="convertido">
        <option value="Real">Real</option>
        <option value="Dolar">Dólar</option>
        <option value="Euro">Euro</option>
    </select>
    <br>
    <input type="submit" value="Converter">
</form>

</body>
</html>












