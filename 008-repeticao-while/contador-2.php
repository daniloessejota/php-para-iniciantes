<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixas de Texto Dinamicas com PHP</title>

    <style>
        .space {
            margin-bottom: 20px;
        }

        .size {
            width: 300px;
        }
    </style>

</head>

<body>

    <div>

        <?php

            $contador = 1;

            while ($contador <= 5) {
                $printValor = "num".$contador;
                $valor = "V".$contador;

                $$printValor = isset($_GET[$valor]) ? $_GET[$valor] : 0;
                $contador++;
            }

            echo "$num1 $num2 $num3 $num4 $num5"; 

        ?>

    </div>

</body>

</html>