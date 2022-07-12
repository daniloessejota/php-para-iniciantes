<pre>
    <?php

    $vetor = array( array (4,8),
                    array (7,0),
                    array (8,2),
                    array (5,3));

    print_r($vetor);

    echo "<br>";
    echo "Referenciar Elementos dentro de um Vetor: <br>";
    echo "<br>";

    $vetor [0][1] = $vetor [3][0];

    print_r($vetor);

    ?>
</pre>