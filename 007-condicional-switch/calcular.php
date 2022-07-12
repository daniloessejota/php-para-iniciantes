<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch - Calculadora</title>

    <style>
        .space {
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <?php
        $num = $_GET["number"];
        $calc = $_GET["calculo"];
    
        switch ($calc) { 
            case '1':
                $result = $num *2;
                break;
            case '2':
                $result = $num ** 3; //exponencial
                break;
            case '3':
                $result = sqrt($num);
                break;
        }

        echo "O resultado da operação solicitada foi $result.";
    ?>

    <div  class="space"><a href="calcular.html">VOLTAR</a></div>

</body>

</html>