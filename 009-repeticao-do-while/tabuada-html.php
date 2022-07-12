<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

</head>

<body>
    <div>
        <form method="get" action="tabuada.php">
            <fieldset>
                <legend>TABUADA</legend>

                <div>
                    <label for="sel">Número:</label>
                    <select name='number'>
                    <?php
                    $contador = 1;
                    while ($contador <= 10) {
                        echo
                        "<option>$contador</option>";
                        $contador++;
                    };
                    ?>
                </div>

                <div><input type="submit" value="Calcular"></div>
            </fieldset>

        </form>
    </div>
</body>

</html>