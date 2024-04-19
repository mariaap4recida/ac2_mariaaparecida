<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado das medias</title>
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
    $a = $_GET ["aluno"];
    $n1 = $_GET ["n1"];
    $n2 = $_GET ["n2"];
    $n3 = $_GET ["n3"];
    $media = ($n1 + $n2 + $n3 )/2;
    if ($n1 && $n2 && $n3 == true) {
        if ($media >= 7) {
        echo "Aprovado!";
        echo "<br/>Nota do aluno: $media."; }
        elseif ($media >= 5 && $media <= 6) {
        echo "Recuperação!";
        echo "<br/Nota do aluno: $media."; }
        elseif ($media <= 4) {
        echo "Reprovado!";
        echo "<br/>Nota do aluno: $media."; }
        else {
        echo "Reprovado!";
        echo "<br/>Nota do aluno: $media.";
    }
        
    }
    else {
        echo "Voce não digitou as informações corretamente...";
    }
    
    ?>
    <a href="ex3.html"><button><span> Voltar </span></button></a> 

</div>
</body>
</html>