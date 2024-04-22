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
            font: 20px arial black;
            text-align: center;
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
    $media = ($n1 + $n2 + $n3 )/3;
    if ($n1 && $n2 && $n3 == true) {
        if ($media >= 7) {
        echo "<h2>Aprovado!";
        echo "<br/><h2>Nota do aluno: $media. &#128213; &#9999; <br/>"; }
        elseif ($media >= 5 && $media <= 6) {
        echo "<h2>Recuperação!";
        echo "<br/<h2>Nota do aluno:" . number_format($media,2) . "&#128213; &#9999; <br/>"; }
        elseif ($media <= 4) {
        echo "<h2>Reprovado!";
        echo "<br/><h2>Nota do aluno:" . number_format($media,2) . "&#128213; &#9999; <br/>"; }
        else {
        echo "<h2>Reprovado!";
        echo "<br/><h2>Nota do aluno:" . number_format($media,2,) . "&#128213; &#9999; <br/>";
    }
        
    }
    else {
        echo "<br>Voce não digitou as informações corretamente... <br/>";
    }

    ?>
    <br>
    <a href="ex3.html"><button><span> Voltar </span></button></a> 

</div>
</body>
</html>