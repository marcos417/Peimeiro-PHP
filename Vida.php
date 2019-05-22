<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $soma1 = $_GET["soma1"];
    $soma2 = $_GET["soma2"];
    $soma3 = $_GET["soma3"];

    if(!empty($soma1) && !empty($soma2) && !empty($soma3))   {
        $total = $soma3 * $soma2;
        $lucro = $total - $soma1;
        echo "O total de ganho é $total e seu lucro é $lucro ";
    } else {
        echo 'Cara de pau, informa os valores!';
    }

?>
</br><a href="index.html">Voltar</a>
</body>
</html>