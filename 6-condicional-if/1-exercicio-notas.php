<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉDIA DOS ALUNOS</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.5em;
        }

        .cta {
            font-size: .8em;
            margin-top: 20px;
        }

    </style>

</head>

<body>

    <?php
    $notaUm = isset ($_GET["notaUm"]) ? $_GET["notaUm"] : 0;
    $notaDois = isset ($_GET["notaDois"]) ? $_GET["notaDois"] : 0;

    $media = ($notaUm + $notaDois)/2;

        if ($media < 5) {
            $resultado = "REPROVADO";
        } elseif ($media >= 5 && $media < 7) {
            $resultado = " de RECUPERAÇÃO";
        } else {
            $resultado = "APROVADO";
        }

    echo "A média das notas $notaUm e $notaDois é: " . number_format($media,1) . "</br>";
    echo "O aluno está $resultado";

    ?>

    <div class="cta"><a href="1-exercicio-notas.html">VOLTAR</a></div>

</body>

</html>