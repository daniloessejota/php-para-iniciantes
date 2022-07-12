<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1.5em;
            line-height: 2em;
        }
    </style>

</head>

<body>
    <?php

    /* Operadores Lógicos:

    && - and;
    || - or; (pipes)
    xor - xou;
    não ou no - !; */

    echo "<h2>EU SOU OBRIGADO A VOTAR NAS ELEIÇÕES?</h2>";

    $anoNascimento = $_GET["nascido"];
    $anoAtual = $_GET["atual"];

    $idade = $anoAtual - $anoNascimento;

    echo "Voce tem atualmente: $idade anos, portanto voce " . (($idade >= 18 && $idade < 65) ? "É OBRIGADO" : "NÃO É OBRIGADO")  . " a votar nas próximas eleições.";

    ?>

</body>

</html>