<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizável</title>

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

        <?php
        
        $start = $_GET["start"]; 
        $end = $_GET["end"]; 
        $space = $_GET["space"]; 
        $contador = $start;
        
        if ($start < $end) {
            while ($contador <= $end) {
                echo $contador . "</br>";
                $contador += $space;
            } 
        } else {
            while ($contador >= $end) {
                echo $contador . "</br>";
                $contador -= $space;
            }
        }
        
        ?>

</body>

</html>