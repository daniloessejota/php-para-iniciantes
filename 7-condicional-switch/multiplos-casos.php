<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch com Múltiplos Casos</title>

    <style>
        .space {
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <?php
        $day = $_GET["weekday"];
    
        switch ($day) {
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
                echo "TEM AULA!";
                break;
            case '6':
            case '7':
                echo "NÃO TEM AULA!";
                break;
        };

    ?>

    <div  class="space"><a href="multiplos-casos.html">VOLTAR</a></div>

</body>

</html>