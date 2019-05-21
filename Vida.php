<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $soma1 = isset ($_GET ["soma1"])?$_GET["soma1"]:0;
    $soma2 = isset ($_GET ["soma2"])?$_GET["soma2"]:0;
    $soma3 = isset ($_GET ["soma3"])?$_GET["soma3"]:0;
    $total = $soma3 * $soma2;
    $lucro = $total - $soma1;
    echo " O total de ganho é $total e seu lucro é $lucro ";

?>
</br><a href="index.html">Voltar</a>
</body>
</html>