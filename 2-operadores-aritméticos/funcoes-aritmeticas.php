<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmeticas em PHP</title>

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

        $num1 = $_GET["x"];
        $num2 = $_GET["y"];

        $multiplicacao = $num1 * $num2;

        echo "<h2>Valores Recebidos: $num1 e $num2</h2>";

        //FUNÇÕES PRÉ-DEFINIDAS PARA MANIPULAÇÃO DE NÚMEROS:

        echo "O valor absoluto de $num1 é: ". abs($num1); //valor absoluto;
        echo "<br>O valor absoluto de $num2 é: ". abs($num2); //valor absoluto;

        echo "<br>O valor de $num1<sup>$num2</sup> é: ". pow($num1, $num2); //potenciação;

        echo "<br>A raiz quadrada de $num1 é: ". sqrt($num1); //raiz quadrada;

        echo "<br>O valor de $num2 arrendondado é: ". round($num2); //Arrendondar um número - ceil (para cima) or floor (para baixo);

        echo "<br>O valor de $num2 inteiro é: ". intval($num2); //Valor inteiro de uma variável;

        echo "<br>O valor de R$ " . number_format($num1,2,",","."). " x R$ " . number_format($num2,2,",",".") . " é R$ " . number_format($multiplicacao,2,",","."); //Para escrever os valores númericos em formato de dezena, centena e milhar, muito usado para valores de moedas;

    ?>

</body>

</html>