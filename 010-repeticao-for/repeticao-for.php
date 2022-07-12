<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>

<body>

</body>
    <?php

    $num = $_GET["number"];
    $multiplo = 0;
    $modulo = 0;
    $divisores = 0;

    echo "Analisando o número $num... </br>";
    echo "Valores Múltiplos: ";

    for ($i=1; $i <= $num; $i++) {
        $modulo = $num % $i;

        if ($modulo == 0 && $i >= 1) {

            echo  $i . " ";

            $multiplo ++;

        };
    };

    echo "</br>Total de Múltiplos: $multiplo </br>";

    if ($multiplo == 2) {
        echo "Resultado: $num É PRIMO.</br>";
    } else {
        echo "Resultado: $num NÃO É PRIMO.</br>";
    };

    ?>

    <a href="repeticao-for.html">VOLTAR</a>
</html>