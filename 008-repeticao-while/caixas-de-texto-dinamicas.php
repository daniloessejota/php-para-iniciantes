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
        <form method="get" action="contador-2.php">
        <?php

        $contador = 1;

        while ($contador <= 5) {

        echo "<div class='space'><label for='number'>Valor $contador: </label><input type='number' name='V$contador' min='0' max='100' value='0'></div>";
        
            $contador++;
        };

        ?>
    </div>

    <div>
        <input type="submit" value="ENVIAR">
    </div>

    </form>
</body>

</html>