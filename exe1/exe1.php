<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Real e Dolar</title>
    <style>
        h2 { 
            color: black;
            font: 20px arial black;
            text-align: center;
        }
        span {
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <?php 
    $r = $_GET ["real"];
    $us = $r/5.17;
    if ($r == true) {
        echo "<h2>Voce tem $r, <br/>A conversão foi de: R$". number_format($us,2,",",".") ."&#128181;";
        echo "<h2>No dia " . date('d-m-Y H:m:s') . "</h2>";
    }
    else {
        echo "Voce não digitou as informações corretamente...";
    }
    
    ?>

    <a href="ex1.html"><button><span>Voltar</span></button></a> 
</div>
</body>
</html>