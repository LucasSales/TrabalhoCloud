<?php
include_once "Conversor.php";

if(isset($_GET['valor'])){
    $con = new Conversor();
    $valor = $_GET['valor'];
    $atual = $_GET['atual'];
    $convertido = $_GET['convertido'];

    $a = $con->converter($valor,$atual,$convertido);
    echo $a;
}else{
    $a = 0;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

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
    <form class="form-horizontal">
        <div div class="form-group col-md-12">
            <label>Digite o valor:</label>
            <input type="text" name="valor">
            <select name="atual" >
                <option value="Real">Real</option>
                <option value="Dolar">Dólar</option>
                <option value="Euro">Euro</option>
            </select>
            <select name="convertido">
                <option value="Real">Real</option>
                <option value="Dolar">Dólar</option>
                <option value="Euro">Euro</option>
            </select>
        </div>

        <div class="form-group  col-md-12">
            <label>Valor convertido:</label>
            <input type="text" name="valorConvertido" value="<?php echo $a?>">
        </div>

        <div class="form-group col-md-12">
            <input class="btn btn-primary" type="submit" value="Converter">
        </div>
    </form>
</div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</html>












