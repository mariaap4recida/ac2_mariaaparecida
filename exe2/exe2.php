<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
    <style>
        h2 { 
            color: red;
            font: 16px arial;
        }
    </style>
</head>
<body>
<div>
    <?php 
    $ano = $_GET ["ano"];
    $nome = $_GET ["nome"];
    $data = "2024";
    $idade = $data - $ano;
    if ($ano && $nome == true) {
        if ($idade >= 1 && $idade <= 11) {
            echo "Olá $nome, voce tem $idade logo voce é criança...<br/>"; }
        elseif ($idade >= 12 && $idade <= 14) {
            echo "Olá $nome, voce tem $idade logo voce é adolecente...<br/>";
        }
        elseif ($idade >= 15 && $idade <= 18) {
            echo "Olá $nome, voce tem $idade logo voce é jovem...<br/>";
        }
        elseif ($idade >= 19 && $idade <= 64) {
            echo "Olá $nome, voce tem $idade logo voce adulto...<br/>";
        }
        else {
            echo "Olá $nome, voce tem $idade logo voce é idoso...<br/>";
        }
        
    }
    else {
        echo "Voce não digitou as informações corretamente...";
    }
    
    ?>
    <a href="ex2.html"><button><span> Voltar </span></button></a> 

</div>
</body>
</html>