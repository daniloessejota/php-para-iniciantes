
    <?php

    $cadastro = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 78.5, );

    $cadastro ["fuma"] = true;

    foreach ($cadastro as $key => $dado) {
       echo "O campo $key possui o contéudo $dado <br>";
    }

    ?>
