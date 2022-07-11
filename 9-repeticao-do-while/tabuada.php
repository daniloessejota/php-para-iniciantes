<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABUADA</title>

</head>

<body>

    <?php

    $valor = $_GET["number"];
    $contador = 1;

    do {
        $resultado = $valor * $contador;

        echo "<h3>" . $valor . " x " . $contador . " = " . $resultado . "</h3></br>";

        $contador++;

    } while ($contador <= 10);

    ?>

</body>

</html>