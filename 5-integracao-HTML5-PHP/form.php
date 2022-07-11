<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>

</head>

<body>
    <?php

    $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[DADO NÃO INFORMADO]";
    $ano = isset ($_GET["nascimento"]) ? $_GET["nascimento"] : date("Y");
    $genero = isset ($_GET["genero"]) ? $_GET["genero"] : "[DADO NÃO INFORMADO]";

    $idade = date("Y") - $ano;

    echo "O usuário chama-se $nome é do gênero $genero e tem $idade anos."
    ?>

    <a href="form.html">VOLTAR</a>

</body>

</html>