<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>

</head>

<body>
    <?php
        /* Operadores Relacionais:

        Maior $a > $b;
        Menor $a < $b;
        Maior ou igual $a >= $b;
        Menor ou igual $a <= $b;
        Diferente $a <> $b ou $a != $b ;
        Igual $a == $b;
        Identico em Tipo $a === $b;

        Operador Ternário:

        expressão ? verdadeiro : falso;
        Ex:

        $r = $a > $b ? $a + $b : $a - $b;

        $sit = ($m <= 7) ? "recuperação" : "aprovado";

        Operadores Lógicos:

        && - and;
        || - or; (pipes)
        xor - xou;
        não ou no - !;

        */

        /*
        $tipo = $_GET["operacao"];

        $num1 = $_GET["x"];
        $num2 = $_GET["y"];

        echo "<h2>Valores Recebidos foram: $num1 e $num2</h2></br>";

        $resultado = ($tipo == "s") ? $num1 + $num2 : $num1 * $num2;

        echo "<h2>A soma dos valores é: $resultado</h2></br>";

        */

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];

        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        echo "A média das quatro notas bimestrais do aluno é: $media </br>";

        //$sit = $media <= 6 ? "REPROVADO" : "APROVADO";

        echo "O aluno está: " . (($media <= 6) ? "REPROVADO" : "APROVADO");

    ?>
</body>

</html>