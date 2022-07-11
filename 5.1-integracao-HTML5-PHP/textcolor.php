<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $text = isset ($_GET["texto"]) ? ($_GET["texto"]) : "DADO NÃO INFORMADO";
        $size = isset  ($_GET["tamanho"]) ? ($_GET["tamanho"]) : "DADO NÃO INFORMADO";
        $color = isset ($_GET["cor"]) ? ($_GET["cor"]) : "DADO NÃO INFORMADO";
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Colorido</title>

    <style>
        .texto {
            font-family: Arial, Helvetica, sans-serif;
            font-size: <?php echo $size; ?>;
            color: <?php echo $color; ?>;
        }
    </style>

</head>

    <div><?php echo "<span class='texto'>$text</span>"; ?></div>
    <a href="texto-colorido.html">VOLTAR</a>

<body>

</body>

</html>