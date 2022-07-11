<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos e Funções Aritméticas</title>

</head>

<body>
    <?php

        /* Ordem de Precedencia no PHP:
        Parenteses ()
        Multiplicação, Divisão e Módulo *, /, %
        Adição e Subtração +, -

        Usar valores personalizados como valor de váriaveis:
        METÓDO 1:

        http://localhost/aula/aula.php?x=número&y=número

        e

        $num1 = $_GET["x"];
        $num2 = $_GET["y"];

        */

        $num1 = $_GET["x"];
        $num2 = $_GET["y"];

        $media = ($num1 + $num2) / 2;

        echo "<h2>Valores Recebidos: $num1 e $num2</h2>";

        echo "A Soma de $num1 e $num2 é: ". ($num1 + $num2);
        echo "</br> A Subtração de $num1 e $num2 é: ". ($num1 - $num2);
        echo "</br> A Multiplicação de $num1 e $num2 é: ". ($num1 * $num2);
        echo "</br> A Divisão de $num1 e $num2 é: ". ($num1 / $num2);
        echo "</br> O módulo de $num1 e $num2 é: ". ($num1 % $num2);

        echo "</br> A média é: $media";
    ?>

</body>

</html>