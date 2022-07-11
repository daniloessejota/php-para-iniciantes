<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>

</head>

<body>
    <?php

    /*
        adição: $b = $b + $a; --> $b += $a;
        substração: $b = $b - $a; --> $b -= $a
        multiplicação: $c = $c * 5; --> $c *= 5
        divisão: $c = $c / 5; --> $c /= 5;
        módulo: $c = $c % 5; --> $c %= 5;
        concatenação: $a = $a . $b; --> $a .= $b;

        Operadores de Incremento:

        Pré-Incremento $a = $a + 1 --> ++$a;
        Pós-Incremento $a = $a + 1 --> $a++;
        Pré-Decremento $a = $a - 1 --> --$a;
        Pós-Decremento $a = $a - 1 --> $a--;

        //cometário inline
        # comentário inline

        Váriveis Referenciadadas:

        $a = 5;
        $b = $a;
        $b += 5;

        echo $a; --> 5
        echo $b; --> 10

        -----------------------------
        
        $a = 5;
        $b = &$a;
        $b += 5;

        echo $a; --> 10
        echo $b; --> 10

    */

    $valor = $_GET["p"];

    echo "O preço do produto é R$ " .number_format($valor,2,",",".");

    // $valor1 = $valor1 + ($valor1 * 10/100);
    $valor += $valor * 10/100;


    echo "<br> O valor do produto com 10% de aumento é R$ ".number_format($valor,2,",",".");


    $ano = $_GET["aa"];
    echo "<br> O ano atual é $ano e o ano anterior é " . --$ano;

    ?>

</body>
</html>