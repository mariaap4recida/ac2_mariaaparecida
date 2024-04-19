<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado das medias</title>
    <style>
        h2 { 
            color: black;
            font: 16px arial black;
        }
    </style>
</head>
<body>
<div>
    <?php 
    $nome = $_GET ["nome"];
    $ano = $_GET ["data"];
    $p = $_GET ["p"];
    $e = $_GET ["e"];
    $status = $_GET ["status"];
    $o = $_GET ["oper"];
    $idade = date('Y' , strtotime($ano));
    $idadec = date("Y")-$idade;

    switch ($o) {
        case 'fem':
            echo "<h2>Olá, $nome voce tem $idadec anos. Sua profissão é $p &#128221;<h2/>";

            break;
        
        case 'mas':
            echo "<h2>Olá,$nome, voce tem $idade anos. Sua profissão é $p &#128221;<h2/>";
            break;

    default:

    }
    
    ?>
    <a href="ex4.html"><button><span> Voltar </span></button></a> 

</div>
</body>
</html>